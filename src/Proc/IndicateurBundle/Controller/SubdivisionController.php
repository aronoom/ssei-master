<?php

namespace Proc\IndicateurBundle\Controller;

use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use Proc\IndicateurBundle\Entity\Subdivision;
use Proc\IndicateurBundle\Form\SubdivisionType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class SubdivisionController extends Controller
{
    public function listeAction()
    {
        $repository = $this->getDoctrine()->getManager()->getRepository('IndicateurBundle:Subdivision');
        $subdivisions = $repository->findAll();
        return $this->render('IndicateurBundle:Subdivision:liste.html.twig', array(
            'subdivisions' => $subdivisions
        ));
    }
    public function ajouterAction(Request $request)
    {
        $subdivision = new Subdivision();
        $subdivisionForm = $this->createForm(new SubdivisionType(), $subdivision);
        $subdivisionForm->handleRequest($request);
        if( $request->getMethod() == 'POST')
        {
            if ($subdivisionForm->isValid())
            {
                $subdivision = $subdivisionForm->getData();
                $response = new JsonResponse();
                try {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($subdivision);
                    $em->flush();
                    $this->get('session')->getFlashBag()->add(
                        'success',
                        "Subdivision ajoutée"
                    );
                    $response->setStatusCode(200);
                    $response->setData(array('successMessage' => "Ajout effectué avec succes"));
                    return $this->redirectToRoute('subdivision_liste');
                } catch (UniqueConstraintViolationException $ex) {
                    $response->setStatusCode(500);
                    $this->get('session')->getFlashBag()->add('notice_error', 'La subdivision existe déja veuillez modifier');
                    $response->setData(array('errorMessage' => "Subdivision déja existant"));
                    return $this->redirectToRoute('subdivision_ajouter');
                }
            }else {
                $response = new JsonResponse();
                $response->setStatusCode(500);
                $this->get('session')->getFlashBag()->add('notice_error', 'Cette subdivision existe déja');
                $response->setData(array('errorMessage' => "Subdivision déja existant"));
                return $this->redirectToRoute('subdivision_ajouter');
            }
        }
        return $this->render('IndicateurBundle:Subdivision:ajouter.html.twig', [
            'form' => $subdivisionForm->createView()
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
            $id = $request->get('idSubdivision');
            $em = $this->getDoctrine()->getManager();
            $sub = $this->getDoctrine()->getManager()->getRepository('IndicateurBundle:Subdivision')->findOneBy(['id' => $id ]);
            $em->remove($sub);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'success',
                "Suppression de la subdivision effectuée"
            );
            $response = new JsonResponse();
            $response->setStatusCode(200);
            $response->setData(array(
                'successMessage' => "Deleted"));
            return $this->redirectToRoute('subdivision_liste');
        }
    }
    public function modifierAction($id,Request $request)
    {
        $sub = $this->getDoctrine()->getManager()->getRepository('IndicateurBundle:Subdivision')->findOneBy(['id'=> $id]);
        $subForm= $this->createForm(new SubdivisionType(), $sub);
        $subForm->handleRequest($request);
        if( $request->getMethod() == 'POST')
        {
            if ($subForm->isValid())
            {
                $sub2 = $subForm->getData();
                $response = new JsonResponse();
                try{
                    $em = $this->getDoctrine()->getManager();
                    $em->flush();
                    $this->get('session')->getFlashBag()->add('success', "Modification de la subdivision effectuée");
                    $response->setStatusCode(200);
                    $response->setData(array('successMessage' => "Modification réussi"));
                    return $this->redirectToRoute('subdivision_liste');
                }catch (UniqueConstraintViolationException $ex){
                    $this->get('session')->getFlashBag()->add('notice_error', 'La subdivision existe déja veuillez modifier');
                    $response->setStatusCode(500);
                    $response->setData(array('errorMessage' => "Subdivision déja existant"));
                }
            } else {
                $response = new JsonResponse();
                $this->get('session')->getFlashBag()->add('notice_error', 'La subdivision existe déja veuillez modifier');
                $response->setStatusCode(500);
                $response->setData(array('errorMessage' => "Subdivision déja existant"));
            }
            return $this->redirectToRoute('subdivision_modifier',['id' => $id]);
        }
        return $this->render('IndicateurBundle:Subdivision:modifier.html.twig',[
            'form' => $subForm->createView()
        ]);
    }
}
