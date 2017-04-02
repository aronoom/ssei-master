<?php

namespace Proc\IndicateurBundle\Controller;

use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use Proc\IndicateurBundle\Entity\SousSecteur;
use Proc\IndicateurBundle\Form\SousSecteurType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;


class SousSecteurController extends Controller
{
    public function listeAction()
    {
        $repository = $this->getDoctrine()->getManager()->getRepository('IndicateurBundle:SousSecteur');
        $sousSecteurs = $repository->findAll();
        return $this->render('IndicateurBundle:SousSecteur:liste.html.twig', array(
            'sousSecteurs' => $sousSecteurs
        ));
    }
    public function ajouterAction(Request $request)
    {
        $ss = new SousSecteur();
        $ssForm = $this->createForm(new SousSecteurType(), $ss);
        $ssForm->handleRequest($request);
        if( $request->getMethod() == 'POST')
        {
            if ($ssForm->isValid())
            {
                $ss= $ssForm->getData();
                $response = new JsonResponse();
                try {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($ss);
                    $em->flush();
                    $this->get('session')->getFlashBag()->add(
                        'success',
                        "Sous secteur ajoutée"
                    );
                    $response->setStatusCode(200);
                    $response->setData(array('successMessage' => "Ajout effectué avec succes"));
                    return $this->redirectToRoute('sous_secteur_liste');
                } catch (UniqueConstraintViolationException $ex) {
                    $response->setStatusCode(500);
                    $this->get('session')->getFlashBag()->add('notice_error', 'Le libelle du sous secteur existe déja veuillez modifier');
                    $response->setData(array('errorMessage' => "Sous secteur déja existant"));
                    return $this->redirectToRoute('sous_secteur_ajouter');
                }
            }else {
                $response = new JsonResponse();
                $response->setStatusCode(500);
                $this->get('session')->getFlashBag()->add('notice_error', 'Ce sous secteur existe déja');
                $response->setData(array('errorMessage' => "Périodicité déja existant"));
                return $this->redirectToRoute('sous_secteur_ajouter');
            }
        }
        return $this->render('IndicateurBundle:SousSecteur:ajouter.html.twig', [
            'form' => $ssForm->createView()
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
            $id = $request->get('idSousSecteur');
            $em = $this->getDoctrine()->getManager();
            $ss = $this->getDoctrine()->getManager()->getRepository('IndicateurBundle:SousSecteur')->findOneBy(['id' => $id ]);
            $em->remove($ss);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'success',
                "Suppression du sous secteur effectuée"
            );
            $response = new JsonResponse();
            $response->setStatusCode(200);
            $response->setData(array(
                'successMessage' => "Deleted"));
            return $this->redirectToRoute('sous_secteur_liste');
        }
    }
    public function modifierAction($id,Request $request)
    {
        $ss = $this->getDoctrine()->getManager()->getRepository('IndicateurBundle:SousSecteur')->findOneBy(['id'=> $id]);
        $ssForm= $this->createForm(new SousSecteurType(), $ss);
        $ssForm->handleRequest($request);
        if( $request->getMethod() == 'POST')
        {
            if ($ssForm->isValid())
            {
                $response = new JsonResponse();
                try{
                    $em = $this->getDoctrine()->getManager();
                    $em->flush();
                    $this->get('session')->getFlashBag()->add('success', "Modification du sous secteur effectuée");
                    $response->setStatusCode(200);
                    $response->setData(array('successMessage' => "Modification réussi"));
                    return $this->redirectToRoute('sous_secteur_liste');
                }catch (UniqueConstraintViolationException $ex){
                    $this->get('session')->getFlashBag()->add('notice_error', 'Le sous secteur existe déja veuillez modifier');
                    $response->setStatusCode(500);
                    $response->setData(array('errorMessage' => "Sous secteur déja existant"));
                }
            } else {
                $response = new JsonResponse();
                $this->get('session')->getFlashBag()->add('notice_error', 'Le sous secteur existe déja veuillez modifier');
                $response->setStatusCode(500);
                $response->setData(array('errorMessage' => "Sous secteur déja existant"));
            }
            return $this->redirectToRoute('sous_secteur_modifier',['id' => $id]);
        }
        return $this->render('IndicateurBundle:SousSecteur:modifier.html.twig',[
            'form' => $ssForm->createView()
        ]);
    }
}
