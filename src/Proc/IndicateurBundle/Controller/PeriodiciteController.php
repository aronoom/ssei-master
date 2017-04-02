<?php

namespace Proc\IndicateurBundle\Controller;

use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use Proc\IndicateurBundle\Entity\Periodicite;
use Proc\IndicateurBundle\Form\PeriodiciteType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class PeriodiciteController extends Controller
{
    public function listeAction()
    {
        $repository = $this->getDoctrine()->getManager()->getRepository('IndicateurBundle:Periodicite');
        $periodicites = $repository->findAll();
        return $this->render('IndicateurBundle:Periodicite:liste.html.twig', array(
            'periodicites' => $periodicites
        ));
    }
    public function ajouterAction(Request $request)
    {
        $periodicite = new Periodicite();
        $periodiciteForm = $this->createForm(new PeriodiciteType(), $periodicite);
        $periodiciteForm->handleRequest($request);
        if( $request->getMethod() == 'POST')
        {
            if ($periodiciteForm->isValid())
            {
                $periodicite = $periodiciteForm->getData();
                $response = new JsonResponse();
                try {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($periodicite);
                    $em->flush();
                    $this->get('session')->getFlashBag()->add(
                        'success',
                        "Périodicité ajoutée"
                    );
                    $response->setStatusCode(200);
                    $response->setData(array('successMessage' => "Ajout effectué avec succes"));
                    return $this->redirectToRoute('periodicite_liste');
                } catch (UniqueConstraintViolationException $ex) {
                    $response->setStatusCode(500);
                    $this->get('session')->getFlashBag()->add('notice_error', 'Le libelle de l\'periodicite existe déja veuillez modifier');
                    $response->setData(array('errorMessage' => "Périodicité déja existant"));
                    return $this->redirectToRoute('periodicite_ajouter');
                }
            }else {
                $response = new JsonResponse();
                $response->setStatusCode(500);
                $this->get('session')->getFlashBag()->add('notice_error', 'Cette periodicite existe déja');
                $response->setData(array('errorMessage' => "Périodicité déja existant"));
                return $this->redirectToRoute('periodicite_ajouter');
            }
        }
        return $this->render('IndicateurBundle:Periodicite:ajouter.html.twig', [
            'form' => $periodiciteForm->createView()
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
            $id = $request->get('idPeriodicite');
            $em = $this->getDoctrine()->getManager();
            $periodicite = $this->getDoctrine()->getManager()->getRepository('IndicateurBundle:Periodicite')->findOneBy(['id' => $id ]);
            $em->remove($periodicite);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'success',
                "Suppression de l'periodicite effectuée"
            );
            $response = new JsonResponse();
            $response->setStatusCode(200);
            $response->setData(array(
                'successMessage' => "Deleted"));
            return $this->redirectToRoute('periodicite_liste');
        }
    }
    public function modifierAction($id,Request $request)
    {
        $periodicite = $this->getDoctrine()->getManager()->getRepository('IndicateurBundle:Periodicite')->findOneBy(['id'=> $id]);
        $periodiciteForm= $this->createForm(new PeriodiciteType(), $periodicite);
        $periodiciteForm->handleRequest($request);
        if( $request->getMethod() == 'POST')
        {
            if ($periodiciteForm->isValid())
            {
                $periodicite2 = $periodiciteForm->getData();
                $response = new JsonResponse();
                try{
                    $em = $this->getDoctrine()->getManager();
                    $em->flush();
                    $this->get('session')->getFlashBag()->add('success', "Modification de la periodicite effectuée");
                    $response->setStatusCode(200);
                    $response->setData(array('successMessage' => "Modification réussi"));
                    return $this->redirectToRoute('periodicite_liste');
                }catch (UniqueConstraintViolationException $ex){
                    $this->get('session')->getFlashBag()->add('notice_error', 'La periodicite existe déja veuillez modifier');
                    $response->setStatusCode(500);
                    $response->setData(array('errorMessage' => "Périodicité déja existant"));
                }
            } else {
                $response = new JsonResponse();
                $this->get('session')->getFlashBag()->add('notice_error', 'La periodicite existe déja veuillez modifier');
                $response->setStatusCode(500);
                $response->setData(array('errorMessage' => "Périodicité déja existant"));
            }
            return $this->redirectToRoute('periodicite_modifier',['id' => $id]);
        }
        return $this->render('IndicateurBundle:Periodicite:modifier.html.twig',[
            'form' => $periodiciteForm->createView()
        ]);
    }
}
