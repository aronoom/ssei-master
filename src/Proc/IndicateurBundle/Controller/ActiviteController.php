<?php

namespace Proc\IndicateurBundle\Controller;

use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use Proc\IndicateurBundle\Entity\Activite;
use Proc\IndicateurBundle\Form\ActiviteType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
class ActiviteController extends Controller
{
    public function listeAction()
    {
        $repository = $this->getDoctrine()->getManager()->getRepository('IndicateurBundle:Activite');
        $activites = $repository->findAll();
        return $this->render('IndicateurBundle:Activite:liste.html.twig', array(
            'activites' => $activites
        ));
    }
    public function ajouterAction(Request $request)
    {
        $activite = new Activite();
        $activiteForm = $this->createForm(new ActiviteType(), $activite);
        $activiteForm->handleRequest($request);
        if( $request->getMethod() == 'POST')
        {
            if ($activiteForm->isValid())
            {
                $activite = $activiteForm->getData();
                $response = new JsonResponse();
                try {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($activite);
                    $em->flush();
                    $this->get('session')->getFlashBag()->add(
                        'success',
                        "Activité ajoutée"
                    );
                    $response->setStatusCode(200);
                    $response->setData(array('successMessage' => "Ajout effectué avec succes"));
                    return $this->redirectToRoute('activite_liste');
                } catch (UniqueConstraintViolationException $ex) {
                    $response->setStatusCode(500);
                    $this->get('session')->getFlashBag()->add('notice_error', 'L\'activité existe déja veuillez modifier');
                    $response->setData(array('errorMessage' => "Acitivité déja existant"));
                    return $this->redirectToRoute('activite_ajouter');
                }
            }else {
                $response = new JsonResponse();
                $response->setStatusCode(500);
                $this->get('session')->getFlashBag()->add('notice_error', 'Cette activité existe déja');
                $response->setData(array('errorMessage' => "Activité déja existant"));
                return $this->redirectToRoute('activite_ajouter');
            }
        }
        return $this->render('IndicateurBundle:Activite:ajouter.html.twig', [
            'form' => $activiteForm->createView()
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
            $id = $request->get('idActivite');
            $em = $this->getDoctrine()->getManager();
            $activite = $this->getDoctrine()->getManager()->getRepository('IndicateurBundle:Activite')->findOneBy(['id' => $id ]);
            $em->remove($activite);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'success',
                "Suppression de l'activité effectuée"
            );
            $response = new JsonResponse();
            $response->setStatusCode(200);
            $response->setData(array(
                'successMessage' => "Deleted"));
            return $this->redirectToRoute('activite_liste');
        }
    }
    public function modifierAction($id,Request $request)
    {
        $activite= $this->getDoctrine()->getManager()->getRepository('IndicateurBundle:Activite')->findOneBy(['id'=> $id]);
        $activiteForm= $this->createForm(new ActiviteType(), $activite);
        $activiteForm->handleRequest($request);
        if( $request->getMethod() == 'POST')
        {
            if ($activiteForm->isValid())
            {
                $activite2 = $activiteForm->getData();
                $response = new JsonResponse();
                try{
                    $em = $this->getDoctrine()->getManager();
                    $em->flush();
                    $this->get('session')->getFlashBag()->add('success', "Modification de l'activité effectuée");
                    $response->setStatusCode(200);
                    $response->setData(array('successMessage' => "Modification réussi"));
                    return $this->redirectToRoute('activite_liste');
                }catch (UniqueConstraintViolationException $ex){
                    $this->get('session')->getFlashBag()->add('notice_error', 'L\'activité existe déja veuillez modifier');
                    $response->setStatusCode(500);
                    $response->setData(array('errorMessage' => "Activité déja existant"));
                }
            } else {
                $response = new JsonResponse();
                $this->get('session')->getFlashBag()->add('notice_error', 'L\'activité existe déja veuillez modifier');
                $response->setStatusCode(500);
                $response->setData(array('errorMessage' => "Activité déja existant"));
            }
            return $this->redirectToRoute('activite_modifier',['id' => $id]);
        }
        return $this->render('IndicateurBundle:Activite:modifier.html.twig',[
            'form' => $activiteForm->createView()
        ]);
    }
}
