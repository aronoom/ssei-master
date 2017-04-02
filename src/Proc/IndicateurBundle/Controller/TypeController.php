<?php

namespace Proc\IndicateurBundle\Controller;

use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use Proc\IndicateurBundle\Entity\Type;
use Proc\IndicateurBundle\Form\TypeType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class TypeController extends Controller
{
    public function listeAction()
    {
        $repository = $this->getDoctrine()->getManager()->getRepository('IndicateurBundle:Type');
        $types = $repository->findAll();
        return $this->render('IndicateurBundle:Type:liste.html.twig', array(
            'types' => $types
        ));
    }
    public function ajouterAction(Request $request)
    {
        $type = new Type();
        $typeForm = $this->createForm(new TypeType(), $type);
        $typeForm->handleRequest($request);
        if( $request->getMethod() == 'POST')
        {
            if ($typeForm->isValid())
            {
                $type = $typeForm->getData();
                $response = new JsonResponse();
                try {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($type);
                    $em->flush();
                    $this->get('session')->getFlashBag()->add(
                        'success',
                        "Type d'indicateur ajouté"
                    );
                    $response->setStatusCode(200);
                    $response->setData(array('successMessage' => "Ajout effectué avec succes"));
                    return $this->redirectToRoute('type_indicateur_liste');
                } catch (UniqueConstraintViolationException $ex) {
                    $response->setStatusCode(500);
                    $this->get('session')->getFlashBag()->add('notice_error', 'Le libelle du type d\'indicateur existe déja veuillez modifier');
                    $response->setData(array('errorMessage' => "Type déja existant"));
                    return $this->redirectToRoute('type_indicateur_ajouter');
                }
            }else {
                $response = new JsonResponse();
                $response->setStatusCode(500);
                $this->get('session')->getFlashBag()->add('notice_error', 'Ce type d\'indicateur existe déja');
                $response->setData(array('errorMessage' => "Type déja existant"));
                return $this->redirectToRoute('type_indicateur_ajouter');
            }
        }
        return $this->render('IndicateurBundle:Type:ajouter.html.twig', [
            'form' => $typeForm->createView()
        ]);
    }
    protected function getErrorsAsArray($form)
    {
        $errors = array();
        foreach ($form->getErrors() as $error)
            $errors[] = $error->getMessage();

        foreach ($form->all() as $key => $child) {
            if ($err = $this->getErrorsAsArray($child))
                $errors[$key] = $err;
        }
        return $errors;
    }
    public function supprAction(Request $request)
    {
        if( $request->getMethod() == 'POST')
        {
            $id = $request->get('idType');
            $em = $this->getDoctrine()->getManager();
            $type = $this->getDoctrine()->getManager()->getRepository('IndicateurBundle:Type')->findOneBy(['id' => $id ]);
            $em->remove($type);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'success',
                "Suppression du type effectuée"
            );
            $response = new JsonResponse();
            $response->setStatusCode(200);
            $response->setData(array(
                'successMessage' => "Deleted"));
            return $this->redirectToRoute('type_indicateur_liste');
        }
    }
    public function modifierAction($id,Request $request)
    {
        $type = $this->getDoctrine()->getManager()->getRepository('IndicateurBundle:Type')->findOneBy(['id'=> $id]);
        $typeForm= $this->createForm(new TypeType(), $type);
        $typeForm->handleRequest($request);
        if( $request->getMethod() == 'POST')
        {
            if ($typeForm->isValid())
            {
                $type2 = $typeForm->getData();
                $response = new JsonResponse();
                try{
                    $em = $this->getDoctrine()->getManager();
                    $em->flush();
                    $this->get('session')->getFlashBag()->add('success', "Modification du type effectuée");
                    $response->setStatusCode(200);
                    $response->setData(array('successMessage' => "Modification réussi"));
                    return $this->redirectToRoute('type_indicateur_liste');
                }catch (UniqueConstraintViolationException $ex){
                    $this->get('session')->getFlashBag()->add('notice_error', 'Le type d\'indicateur existe déja veuillez modifier');
                    $response->setStatusCode(500);
                    $response->setData(array('errorMessage' => "Type déja existant"));
                }
            } else {
                $response = new JsonResponse();
                $this->get('session')->getFlashBag()->add('notice_error', 'Le type d\'indicateur existe déja veuillez modifier');
                $response->setStatusCode(500);
                $response->setData(array('errorMessage' => "Type déja existant"));
            }
            return $this->redirectToRoute('type_indicateur_modifier',['id' => $id]);
        }
        return $this->render('IndicateurBundle:Type:modifier.html.twig',[
            'form' => $typeForm->createView()
        ]);
    }
}
