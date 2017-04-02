<?php

namespace Proc\IndicateurBundle\Controller;

use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use Proc\IndicateurBundle\Entity\Unite;
use Proc\IndicateurBundle\Form\UniteType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class UniteController extends Controller
{
    public function listeAction()
    {
        $repository = $this->getDoctrine()->getManager()->getRepository('IndicateurBundle:Unite');
        $unites = $repository->findAll();
        return $this->render('IndicateurBundle:Unite:liste.html.twig', array(
            'unites' => $unites
        ));
    }
    public function ajouterAction(Request $request)
    {
        $unite = new Unite();
        $uniteForm = $this->createForm(new UniteType(), $unite);
        $uniteForm->handleRequest($request);
        if( $request->getMethod() == 'POST')
        {
            if ($uniteForm->isValid())
            {
                $unite = $uniteForm->getData();
                $response = new JsonResponse();
                try {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($unite);
                    $em->flush();
                    $this->get('session')->getFlashBag()->add(
                        'success',
                        "Unité ajoutée"
                    );
                    $response->setStatusCode(200);
                    $response->setData(array('successMessage' => "Ajout effectué avec succes"));
                    return $this->redirectToRoute('unite_indicateur_liste');
                } catch (UniqueConstraintViolationException $ex) {
                    $response->setStatusCode(500);
                    $this->get('session')->getFlashBag()->add('notice_error', 'Le libelle de l\'unite existe déja veuillez modifier');
                    $response->setData(array('errorMessage' => "Unité déja existant"));
                    return $this->redirectToRoute('unite_indicateur_ajouter');
                }
            }else {
                $response = new JsonResponse();
                $response->setStatusCode(500);
                $this->get('session')->getFlashBag()->add('notice_error', 'Cette unité existe déja');
                $response->setData(array('errorMessage' => "Unité déja existant"));
                return $this->redirectToRoute('unite_indicateur_ajouter');
            }
        }
        return $this->render('IndicateurBundle:Unite:ajouter.html.twig', [
            'form' => $uniteForm->createView()
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
            $id = $request->get('idUnite');
            $em = $this->getDoctrine()->getManager();
            $unite = $this->getDoctrine()->getManager()->getRepository('IndicateurBundle:Unite')->findOneBy(['id' => $id ]);
            $em->remove($unite);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'success',
                "Suppression de l'unité effectuée"
            );
            $response = new JsonResponse();
            $response->setStatusCode(200);
            $response->setData(array(
                'successMessage' => "Deleted"));
            return $this->redirectToRoute('unite_indicateur_liste');
        }
    }
    public function modifierAction($id,Request $request)
    {
        $unite = $this->getDoctrine()->getManager()->getRepository('IndicateurBundle:Unite')->findOneBy(['id'=> $id]);
        $uniteForm= $this->createForm(new UniteType(), $unite);
        $uniteForm->handleRequest($request);
        if( $request->getMethod() == 'POST')
        {
            if ($uniteForm->isValid())
            {
                $unite2 = $uniteForm->getData();
                $response = new JsonResponse();
                try{
                    $em = $this->getDoctrine()->getManager();
                    $em->flush();
                    $this->get('session')->getFlashBag()->add('success', "Modification de l'unité effectuée");
                    $response->setStatusCode(200);
                    $response->setData(array('successMessage' => "Modification réussi"));
                    return $this->redirectToRoute('unite_indicateur_liste');
                }catch (UniqueConstraintViolationException $ex){
                    $this->get('session')->getFlashBag()->add('notice_error', 'Le\'unité existe déja veuillez modifier');
                    $response->setStatusCode(500);
                    $response->setData(array('errorMessage' => "Unité déja existant"));
                }
            } else {
                $response = new JsonResponse();
                $this->get('session')->getFlashBag()->add('notice_error', 'L\'unité existe déja veuillez modifier');
                $response->setStatusCode(500);
                $response->setData(array('errorMessage' => "Unité déja existant"));
            }
            return $this->redirectToRoute('unite_indicateur_modifier',['id' => $id]);
        }
        return $this->render('IndicateurBundle:Unite:modifier.html.twig',[
            'form' => $uniteForm->createView()
        ]);
    }
}
