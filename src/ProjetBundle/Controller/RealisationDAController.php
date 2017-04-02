<?php

namespace ProjetBundle\Controller;

use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use ProjetBundle\Entity\RealisationTrimestre;
use ProjetBundle\Form\RealisationTrimestreType;
use ProjetBundle\Form\SituationAnnuelleType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ProjetBundle\Entity\ObjectifTrimestre;
use ProjetBundle\Form\ObjectifTrimestreType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;


class RealisationDAController extends Controller
{
    public function listeAction($projet_id, $comp_id,$act_id, $idDescriptifParUi ,$idSituationAnnuelle)
    {
        $em = $this->getDoctrine()->getManager();
        $situationAnnuelle = $em->getRepository('ProjetBundle:SituationAnnuelle')->find($idSituationAnnuelle);
        $realisations = $situationAnnuelle->getRealisationTrimestres();
        $descriptifParUi = $situationAnnuelle->getDescriptifParUi();
        return $this->render('ProjetBundle:RealisationDA:liste.html.twig',[
            'projet_id' => $projet_id,
            'act_id' => $act_id,
            'comp_id' => $comp_id,
            'situationAnnuelle' => $situationAnnuelle,
            'idDescriptifParUi' => $idDescriptifParUi,
            'realisations' => $realisations
        ]);
    }

    public function ajouterAction($projet_id, $comp_id,$act_id, $idDescriptifParUi ,$idSituationAnnuelle)
    {
        $request = $this->getRequest();
        $em = $this->getDoctrine()->getManager();
        $situationAnnuelle = $this->getDoctrine()->getManager()->getRepository('ProjetBundle:SituationAnnuelle')->findOneBy(['id' => $idSituationAnnuelle ]);
        $realisation = new RealisationTrimestre();
        $realisationForm = $this->createForm(new RealisationTrimestreType(), $realisation);
        $realisationForm->handleRequest($request);
        if( $request->getMethod() == 'POST')
        {
            if ($realisationForm->isValid())
            {
                $realisation = $realisationForm->getData();
                $response = new JsonResponse();
                try {
                    $em = $this->getDoctrine()->getManager();
                    $realisation->setDate(new \Datetime());
                    $realisation->setSituationAnnuelle($situationAnnuelle);
                    $em->persist($realisation);
                    $em->flush();
                    $this->get('session')->getFlashBag()->add(
                        'success',
                        "Réalisation ajoutée"
                    );
                    $response->setStatusCode(200);
                    $response->setData(array('successMessage' => "Ajout effectué avec succes"));
                    return $this->redirectToRoute('projet_descriptif_activite_situation_annuelle_realisation_liste',[
                        'projet_id' => $projet_id,
                        'comp_id' => $comp_id,
                        'act_id' => $act_id,
                        'idDescriptifParUi' => $idDescriptifParUi,
                        'idSituationAnnuelle' => $idSituationAnnuelle
                    ]);
                } catch (UniqueConstraintViolationException $ex) {
                    $response->setStatusCode(500);
                    $this->get('session')->getFlashBag()->add('notice_error', 'La réalisation existe déja veuillez modifier');
                    $response->setData(array('errorMessage' => "Réalisation déja existant"));
                    return $this->redirectToRoute('projet_descriptif_activite_situation_annuelle_realisation_ajouter',[
                        'idSituationAnnuelle' => $idSituationAnnuelle
                    ]);
                }
            }else {
                $response = new JsonResponse();
                $response->setStatusCode(500);
                $this->get('session')->getFlashBag()->add('notice_error', 'Réalisation existe déja');
                $response->setData(array('errorMessage' => "Réalisation déja existant"));
                return $this->redirectToRoute('projet_descriptif_activite_situation_annuelle_realisation_ajouter',[
                    'idSituationAnnuelle' => $idSituationAnnuelle
                ]);
            }
        }
        return $this->render('ProjetBundle:RealisationDA:ajouter.html.twig', [
            'form' => $realisationForm->createView(),
            'idSituationAnnuelle'=> $idSituationAnnuelle,
            'projet_id' => $projet_id,
            'act_id' => $act_id,
            'comp_id' => $comp_id,
            'idDescriptifParUi' => $idDescriptifParUi,
        ]);
    }

    public function modifierAction($projet_id, $comp_id,$act_id, $idDescriptifParUi ,$idSituationAnnuelle,$idRealisation,Request $request)
    {
        $request = $this->getRequest();
        $em = $this->getDoctrine()->getManager();
        $realisation = $em->getRepository('ProjetBundle:RealisationTrimestre')->find($idRealisation);
        $situationAnnuelle = $this->getDoctrine()->getManager()->getRepository('ProjetBundle:SituationAnnuelle')->find($idSituationAnnuelle);
        $realisationForm = $this->createForm(new RealisationTrimestreType(), $realisation);
        $realisationForm->handleRequest($request);
        if( $request->getMethod() == 'POST')
        {
            if ($realisationForm->isValid())
            {
                $realisation = $realisationForm->getData();
                $response = new JsonResponse();
                try{
                    $em = $this->getDoctrine()->getManager();
                    $em->flush();
                    $this->get('session')->getFlashBag()->add('success', "Modification de la realisation effectuée");
                    $response->setStatusCode(200);
                    $response->setData(array('successMessage' => "Modification réussi"));
                    return $this->redirectToRoute('projet_descriptif_activite_situation_annuelle_realisation_liste',[
                        'projet_id' => $projet_id,
                        'comp_id' => $comp_id,
                        'act_id' => $act_id,
                        'idDescriptifParUi' => $idDescriptifParUi,
                        'idSituationAnnuelle' => $idSituationAnnuelle
                    ]);
                }catch (UniqueConstraintViolationException $ex){
                    $this->get('session')->getFlashBag()->add('notice_error', 'La realisation existe déja veuillez modifier');
                    $response->setStatusCode(500);
                    $response->setData(array('errorMessage' => "Réalisation déja existant"));
                    return $this->redirectToRoute('projet_descriptif_activite_situation_annuelle_realisation_liste',[
                        'projet_id' => $projet_id,
                        'comp_id' => $comp_id,
                        'act_id' => $act_id,
                        'idDescriptifParUi' => $idDescriptifParUi,
                        'idSituationAnnuelle' => $idSituationAnnuelle
                    ]);
                }
            } else {
                $response = new JsonResponse();
                $this->get('session')->getFlashBag()->add('notice_error', 'La realisation existe déja veuillez modifier');
                $response->setStatusCode(500);
                $response->setData(array('errorMessage' => "Realisation déja existant"));
            }
            return $this->redirectToRoute('projet_descriptif_activite_situation_annuelle_realisation_modifier',[
                'idSituationAnnuelle' => $idSituationAnnuelle,
                'idRealisation' => $idRealisation
            ]);
        }
        return $this->render('ProjetBundle:RealisationDA:modifier.html.twig',[
            'form' => $realisationForm->createView(),
            'idSituationAnnuelle' => $idSituationAnnuelle,
            'projet_id' => $projet_id,
            'act_id' => $act_id,
            'comp_id' => $comp_id,
            'idDescriptifParUi' => $idDescriptifParUi,
        ]);
    }
    // suppression d'une situation annuelle
    public function supprimerAction($projet_id, $comp_id,$act_id, $idDescriptifParUi ,$idSituationAnnuelle, Request $request)
    {
        if( $request->getMethod() == 'POST')
        {
            $id = $request->get('idRealisation');
            $em = $this->getDoctrine()->getManager();
            $situationAnnuelle = $this->getDoctrine()->getManager()->getRepository('ProjetBundle:SituationAnnuelle')->findOneBy(['id' => $idSituationAnnuelle ]);
            $realisation = $em->getRepository('ProjetBundle:RealisationTrimestre')->find($id);
            $situationAnnuelle->removeRealisationTrimestre($realisation);
            $em->remove($realisation);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'success',
                "Suppression de la réalisation effectuée"
            );
            $response = new JsonResponse();
            $response->setStatusCode(200);
            $response->setData(array(
                'successMessage' => "Supprimée"));
            return $this->redirectToRoute('projet_descriptif_activite_situation_annuelle_realisation_liste',[
                'projet_id' => $projet_id,
                'comp_id' => $comp_id,
                'act_id' => $act_id,
                'idDescriptifParUi' => $idDescriptifParUi,
                'idSituationAnnuelle' => $idSituationAnnuelle
            ]);
        }
    }
}
