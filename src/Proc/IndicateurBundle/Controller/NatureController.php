<?php

namespace Proc\IndicateurBundle\Controller;

use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use Proc\IndicateurBundle\Entity\Nature;
use Proc\IndicateurBundle\Form\NatureType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;


class NatureController extends Controller
{
    public function listeAction()
    {
        $repository = $this->getDoctrine()->getManager()->getRepository('IndicateurBundle:Nature');
        $natures = $repository->findAll();
        return $this->render('IndicateurBundle:Nature:liste.html.twig', array(
            'natures' => $natures
        ));
    }
    public function ajouterAction(Request $request)
    {
        $nature = new Nature();
        $natureForm = $this->createForm(new NatureType(), $nature);
        $natureForm->handleRequest($request);
        if( $request->getMethod() == 'POST')
        {
            if ($natureForm->isValid())
            {
                $nature = $natureForm->getData();
                $response = new JsonResponse();
                try {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($nature);
                    $em->flush();
                    $this->get('session')->getFlashBag()->add(
                        'success',
                        "Unité ajoutée"
                    );
                    $response->setStatusCode(200);
                    $response->setData(array('successMessage' => "Ajout effectué avec succes"));
                    return $this->redirectToRoute('nature_liste');
                } catch (UniqueConstraintViolationException $ex) {
                    $response->setStatusCode(500);
                    $this->get('session')->getFlashBag()->add('notice_error', 'Le libelle de l\'nature existe déja veuillez modifier');
                    $response->setData(array('errorMessage' => "Unité déja existant"));
                    return $this->redirectToRoute('nature_ajouter');
                }
            }else {
                $response = new JsonResponse();
                $response->setStatusCode(500);
                $this->get('session')->getFlashBag()->add('notice_error', 'Cette nature existe déja');
                $response->setData(array('errorMessage' => "Unité déja existant"));
                return $this->redirectToRoute('nature_ajouter');
            }
        }
        return $this->render('IndicateurBundle:Nature:ajouter.html.twig', [
            'form' => $natureForm->createView()
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
            $id = $request->get('idNature');
            $em = $this->getDoctrine()->getManager();
            $nature = $this->getDoctrine()->getManager()->getRepository('IndicateurBundle:Nature')->findOneBy(['id' => $id ]);
            $em->remove($nature);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'success',
                "Suppression de l'nature effectuée"
            );
            $response = new JsonResponse();
            $response->setStatusCode(200);
            $response->setData(array(
                'successMessage' => "Deleted"));
            return $this->redirectToRoute('nature_liste');
        }
    }
    public function modifierAction($id,Request $request)
    {
        $nature = $this->getDoctrine()->getManager()->getRepository('IndicateurBundle:Nature')->findOneBy(['id'=> $id]);
        $natureForm= $this->createForm(new NatureType(), $nature);
        $natureForm->handleRequest($request);
        if( $request->getMethod() == 'POST')
        {
            if ($natureForm->isValid())
            {
                $nature2 = $natureForm->getData();
                $response = new JsonResponse();
                try{
                    $em = $this->getDoctrine()->getManager();
                    $em->flush();
                    $this->get('session')->getFlashBag()->add('success', "Modification de la nature effectuée");
                    $response->setStatusCode(200);
                    $response->setData(array('successMessage' => "Modification réussi"));
                    return $this->redirectToRoute('nature_liste');
                }catch (UniqueConstraintViolationException $ex){
                    $this->get('session')->getFlashBag()->add('notice_error', 'La nature existe déja veuillez modifier');
                    $response->setStatusCode(500);
                    $response->setData(array('errorMessage' => "Unité déja existant"));
                }
            } else {
                $response = new JsonResponse();
                $this->get('session')->getFlashBag()->add('notice_error', 'La nature existe déja veuillez modifier');
                $response->setStatusCode(500);
                $response->setData(array('errorMessage' => "Unité déja existant"));
            }
            return $this->redirectToRoute('nature_modifier',['id' => $id]);
        }
        return $this->render('IndicateurBundle:Nature:modifier.html.twig',[
            'form' => $natureForm->createView()
        ]);
    }
}
