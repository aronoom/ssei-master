<?php

namespace Proc\IndicateurBundle\Controller;

use Proc\IndicateurBundle\Entity\Indicateur;
use Proc\IndicateurBundle\Form\IndicateurType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;


class IndicateurController extends Controller
{
    /**
     * retourne la liste des niveaux un
     */
    public function listeAction()
    {
        $repository = $this->getDoctrine()->getManager()->getRepository('IndicateurBundle:Indicateur');
        $indicateurs = $repository->findAll();
        return $this->render('IndicateurBundle:Indicateur:liste.html.twig', array(
            'indicateurs' => $indicateurs
        ));
    }

    /**
     * @return Response
     * renvoie une responseJSON montrant la liste des indicateurs
     */
    public function listeAjaxAction()
    {
        $em = $this->getDoctrine()->getManager();
        $indicateurs = $em->getRepository('IndicateurBundle:Indicateur')->findAll();
        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');
        $response->setStatusCode(200);
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        $jsonContent = $serializer->serialize($indicateurs, 'json');
        $response->setContent($jsonContent);
        return $response;
    }

    public function ajouterAction(Request $request)
    {
        $indicateur = new Indicateur();
        $indForm = $this->createForm(new IndicateurType(), $indicateur);
        $indForm->handleRequest($request);
        if( $request->getMethod() == 'POST')
        {
            if ($indForm->isValid())
            {
                $indicateur = $indForm->getData();
                $indicateur2 = $indForm->getData();
                $response = new JsonResponse();
                if ($this->findByLibelle($indicateur->getLibelleIndicateur()) != null)
                {
                    $this->get('session')->getFlashBag()->add(
                        'error',
                        'Libelle indicateur déja existant'
                    );
                    $response->setStatusCode(500);
                    $this->get('session')->getFlashBag()->add('notice_error', 'Le libelle de l\'indicateur existe déja veuillez modifier');
                    $response->setData(array('errorMessage' => "Indicateur déja existant"));
                    return $this->redirectToRoute('indicateur_ajouter');
                } else {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($indicateur);
                    $em->flush();
                    $this->get('session')->getFlashBag()->add(
                        'success',
                        "Indicateur ajouté"
                    );
                    $response->setStatusCode(200);
                    $response->setData(array('successMessage' => "Ajout effectué avec succes"));
                    return $this->redirectToRoute('indicateur_liste');
                }
            }
        }
        return $this->render('IndicateurBundle:Indicateur:ajouter.html.twig', [
                'form' => $indForm->createView()
        ]);
    }

    public function modifierAction($id,Request $request)
    {
        $indicateur = $this->getDoctrine()->getManager()->getRepository('IndicateurBundle:Indicateur')->find($id);
        $indForm = $this->createForm(new IndicateurType(), $indicateur);
        $indForm->handleRequest($request);
        if( $request->getMethod() == 'POST')
        {
            if ($indForm->isValid()) {
                $response = new JsonResponse();
                $indicateur2 = $indForm->getData();
                if(($this->findByLibelle($indicateur2->getLibelleIndicateur()) != null) && ($indicateur2->getId() == $indicateur->getId())) {
                    $this->get('session')->getFlashBag()->add('notice_error', 'Le libelle de l\'indicateur déja existant veuillez modifier');
                    $response->setStatusCode(500);
                    $response->setData(array('errorMessage' => "Indicateur déja existant"));
                    return $this->redirectToRoute('indicateur_modifier',['id' => $id]);
                }else {
                    $em = $this->getDoctrine()->getManager();
                    $em->flush();
                    $this->get('session')->getFlashBag()->add(
                        'success',
                        "Modification de l'indicateur effectuée"
                    );
                    $response->setStatusCode(200);
                    $response->setData(array('successMessage' => "Modification réussi"));
                    return $this->redirectToRoute('indicateur_liste');
                }
            }
        }
        else
        {
            return $this->render('IndicateurBundle:Indicateur:modifier.html.twig',
                    array('form' =>  $indForm->createView())
            );
        }
    }




    public function findByLibelle($libelle)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository("IndicateurBundle:Indicateur");
        $indicateur = $repository->findOneBy(['libelleIndicateur' => $libelle]);
        return $indicateur;
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
            $id = $request->get('idIndicateur');
            $em = $this->getDoctrine()->getManager();
            $indicateur = $this->getDoctrine()->getManager()->getRepository('IndicateurBundle:Indicateur')->findOneBy(['id' => $id ]);
            $em->remove($indicateur);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'success',
                "Suppression de l'indicateur effectuée"
            );
            $response = new JsonResponse();
            $response->setStatusCode(200);
            $response->setData(array(
                'successMessage' => "Deleted"));
            return $this->redirectToRoute('indicateur_liste');
        }
    }
}
    