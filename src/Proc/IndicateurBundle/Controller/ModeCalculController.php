<?php

namespace Proc\IndicateurBundle\Controller;

use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use Proc\IndicateurBundle\Entity\Mode_calcul;
use Proc\IndicateurBundle\Form\Mode_calculType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Proc\IndicateurBundle\Tests\Controller\ActiviteControllerTest;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;


class ModeCalculController extends Controller
{
    public function listeAction()
    {
        $repository = $this->getDoctrine()->getManager()->getRepository('IndicateurBundle:Mode_calcul');
        $mcs = $repository->findAll();
        return $this->render('IndicateurBundle:ModeCalcul:liste.html.twig', array(
            'mcs' => $mcs
        ));
    }
    public function ajouterAction(Request $request)
    {
        $mc = new Mode_calcul();
        $mcForm = $this->createForm(new Mode_calculType(), $mc);
        $mcForm->handleRequest($request);
        if( $request->getMethod() == 'POST')
        {
            if ($mcForm->isValid())
            {
                $mc = $mcForm->getData();
                $response = new JsonResponse();
                try {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($mc);
                    $em->flush();
                    $this->get('session')->getFlashBag()->add(
                        'success',
                        "Mode de calcul ajoutée"
                    );
                    $response->setStatusCode(200);
                    $response->setData(array('successMessage' => "Ajout effectué avec succes"));
                    return $this->redirectToRoute('modeCalcul_liste');
                } catch (UniqueConstraintViolationException $ex) {
                    $response->setStatusCode(500);
                    $this->get('session')->getFlashBag()->add('notice_error', 'Le mode de calcul existe déja veuillez modifier');
                    $response->setData(array('errorMessage' => "Mode de calcul déja existant"));
                    return $this->redirectToRoute('modeCalcul_ajouter');
                }
            }else {
                $response = new JsonResponse();
                $response->setStatusCode(500);
                $this->get('session')->getFlashBag()->add('notice_error', 'Ce mode de calcul existe déja');
                $response->setData(array('errorMessage' => "Mode de calcul déja existant"));
                return $this->redirectToRoute('modeCalcul_ajouter');
            }
        }
        return $this->render('IndicateurBundle:ModeCalcul:ajouter.html.twig', [
            'form' => $mcForm->createView()
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
            $id = $request->get('idModeCalcul');
            $em = $this->getDoctrine()->getManager();
            $mc = $this->getDoctrine()->getManager()->getRepository('IndicateurBundle:Mode_calcul')->findOneBy(['id' => $id ]);
            $em->remove($mc);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'success',
                "Suppression du mode de calcul"
            );
            $response = new JsonResponse();
            $response->setStatusCode(200);
            $response->setData(array(
                'successMessage' => "Deleted"));
            return $this->redirectToRoute('modeCalcul_liste');
        }
    }
    public function modifierAction($id,Request $request)
    {
        $mc = $this->getDoctrine()->getManager()->getRepository('IndicateurBundle:Mode_calcul')->findOneBy(['id'=> $id]);
        $mcForm= $this->createForm(new Mode_calculType(), $mc);
        $mcForm->handleRequest($request);
        if( $request->getMethod() == 'POST')
        {
            if ($mcForm->isValid())
            {
                $mc2 = $mcForm->getData();
                $response = new JsonResponse();
                try{
                    $em = $this->getDoctrine()->getManager();
                    $em->flush();
                    $this->get('session')->getFlashBag()->add('success', "Modification du mode de calcul effectuée");
                    $response->setStatusCode(200);
                    $response->setData(array('successMessage' => "Modification réussi"));
                    return $this->redirectToRoute('modeCalcul_liste');
                }catch (UniqueConstraintViolationException $ex){
                    $this->get('session')->getFlashBag()->add('notice_error', 'Le mode de calcul existe déja veuillez modifier');
                    $response->setStatusCode(500);
                    $response->setData(array('errorMessage' => "Mode de calcul déja existant"));
                }
            } else {
                $response = new JsonResponse();
                $this->get('session')->getFlashBag()->add('notice_error', 'Le mode de calcul existe déja veuillez modifier');
                $response->setStatusCode(500);
                $response->setData(array('errorMessage' => "Mode de calcul déja existant"));
            }
            return $this->redirectToRoute('modeCalcul_modifier',['id' => $id]);
        }
        return $this->render('IndicateurBundle:ModeCalcul:modifier.html.twig',[
            'form' => $mcForm->createView()
        ]);
    }
}
