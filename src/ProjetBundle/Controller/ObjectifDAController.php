<?php

namespace ProjetBundle\Controller;

use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use ProjetBundle\Form\SituationAnnuelleType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ProjetBundle\Entity\ObjectifTrimestre;
use ProjetBundle\Form\ObjectifTrimestreType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class ObjectifDAController extends Controller
{
    public function listeAction($projet_id, $comp_id,$act_id, $idDescriptifParUi ,$idSituationAnnuelle)
    {
        $em = $this->getDoctrine()->getManager();
        $situationAnnuelle = $em->getRepository('ProjetBundle:SituationAnnuelle')->findOneBy(['id'=>$idSituationAnnuelle]);
        $objectifs = $situationAnnuelle->getObjectifTrimestres();

        return $this->render('ProjetBundle:ObjectifDA:liste.html.twig',[
            'projet_id' => $projet_id,
            'act_id' => $act_id,
            'comp_id' => $comp_id,
            'situationAnnuelle' => $situationAnnuelle,
            'idDescriptifParUi' => $idDescriptifParUi,
            'objectifs' => $objectifs
        ]);
    }

    public function ajouterAction($projet_id, $comp_id,$act_id, $idDescriptifParUi ,$idSituationAnnuelle)
    {
        $request = $this->getRequest();
        $em = $this->getDoctrine()->getManager();
        $situationAnnuelle = $this->getDoctrine()->getManager()->getRepository('ProjetBundle:SituationAnnuelle')->findOneBy(['id' => $idSituationAnnuelle ]);
        $objectif = new ObjectifTrimestre();
        $objectifForm = $this->createForm(new ObjectifTrimestreType(), $objectif);
        $objectifForm->handleRequest($request);
        if( $request->getMethod() == 'POST')
        {
            if ($objectifForm->isValid())
            {
                $objectif = $objectifForm->getData();
                $response = new JsonResponse();
                try {
                    $em = $this->getDoctrine()->getManager();
                    $objectif->setDate(new \Datetime());
                    $objectif->setSituationAnnuelle($situationAnnuelle);
                    $em->persist($objectif);
                    $em->flush();
                    $this->get('session')->getFlashBag()->add(
                        'success',
                        "Objectif ajoutée"
                    );
                    $response->setStatusCode(200);
                    $response->setData(array('successMessage' => "Ajout effectué avec succes"));
                    return $this->redirectToRoute('projet_descriptif_activite_situation_annuelle_objectif_liste',[
                        'projet_id' => $projet_id,
                        'comp_id' => $comp_id,
                        'act_id' => $act_id,
                        'idDescriptifParUi' => $idDescriptifParUi,
                        'idSituationAnnuelle' => $idSituationAnnuelle
                    ]);
                } catch (UniqueConstraintViolationException $ex) {
                    $response->setStatusCode(500);
                    $this->get('session')->getFlashBag()->add('notice_error', 'L\'objectif existe déja veuillez modifier');
                    $response->setData(array('errorMessage' => "Objectif déja existant"));
                    return $this->redirectToRoute('projet_descriptif_activite_situation_annuelle_objectif_liste_ajouter',[
                        'projet_id' => $projet_id,
                        'comp_id' => $comp_id,
                        'act_id' => $act_id,
                        'idDescriptifParUi' => $idDescriptifParUi,
                        'idSituationAnnuelle' => $idSituationAnnuelle
                    ]);
                }
            }else {
                $response = new JsonResponse();
                $response->setStatusCode(500);
                $this->get('session')->getFlashBag()->add('notice_error', 'Cetobjectif existe déja');
                $response->setData(array('errorMessage' => "Objectif déja existant"));
                return $this->redirectToRoute('projet_descriptif_activite_situation_annuelle_objectif_liste_ajouter',[
                    'projet_id' => $projet_id,
                    'comp_id' => $comp_id,
                    'act_id' => $act_id,
                    'idDescriptifParUi' => $idDescriptifParUi,
                    'idSituationAnnuelle' => $idSituationAnnuelle
                ]);
            }
        }
        return $this->render('ProjetBundle:ObjectifDA:ajouter.html.twig', [
            'form' => $objectifForm->createView(),
            'idSituationAnnuelle'=> $idSituationAnnuelle,
            'projet_id' => $projet_id,
            'act_id' => $act_id,
            'comp_id' => $comp_id,
            'idDescriptifParUi' => $idDescriptifParUi,
        ]);
    }

    public function modifierAction($projet_id, $comp_id,$act_id, $idDescriptifParUi ,$idSituationAnnuelle,$idObjectif,Request $request)
    {
        $request = $this->getRequest();
        $em = $this->getDoctrine()->getManager();
        $objectif = $em->getRepository('ProjetBundle:ObjectifTrimestre')->find($idObjectif);
        $situationAnnuelle = $this->getDoctrine()->getManager()->getRepository('ProjetBundle:SituationAnnuelle')->find($idSituationAnnuelle);
        $objectifForm = $this->createForm(new ObjectifTrimestreType(), $objectif);
        $objectifForm->handleRequest($request);
        if( $request->getMethod() == 'POST')
        {
            if ($objectifForm->isValid())
            {
                $objectif = $objectifForm->getData();
                $response = new JsonResponse();
                try{
                    $em = $this->getDoctrine()->getManager();
                    $em->flush();
                    $this->get('session')->getFlashBag()->add('success', "Modification de l'objectif effectuée");
                    $response->setStatusCode(200);
                    $response->setData(array('successMessage' => "Modification réussi"));
                    return $this->redirectToRoute('projet_descriptif_activite_situation_annuelle_objectif_liste',[
                        'projet_id' => $projet_id,
                        'comp_id' => $comp_id,
                        'act_id' => $act_id,
                        'idDescriptifParUi' => $idDescriptifParUi,
                        'idSituationAnnuelle' => $idSituationAnnuelle
                    ]);
                }catch (UniqueConstraintViolationException $ex){
                    $this->get('session')->getFlashBag()->add('notice_error', 'L\'objectif existe déja veuillez modifier');
                    $response->setStatusCode(500);
                    $response->setData(array('errorMessage' => "Objectif déja existant"));
                    return $this->redirectToRoute('projet_descriptif_activite_situation_annuelle_objectif_liste',[
                        'projet_id' => $projet_id,
                        'comp_id' => $comp_id,
                        'act_id' => $act_id,
                        'idDescriptifParUi' => $idDescriptifParUi,
                        'idSituationAnnuelle' => $idSituationAnnuelle
                    ]);
                }
            } else {
                $response = new JsonResponse();
                $this->get('session')->getFlashBag()->add('notice_error', 'L\'objectif existe déja veuillez modifier');
                $response->setStatusCode(500);
                $response->setData(array('errorMessage' => "Objectif déja existant"));
            }
            return $this->redirectToRoute('projet_descriptif_activite_situation_annuelle_objectif_liste_modifier',[
                'projet_id' => $projet_id,
                'comp_id' => $comp_id,
                'act_id' => $act_id,
                'idDescriptifParUi' => $idDescriptifParUi,
                'idSituationAnnuelle' => $idSituationAnnuelle,
                'idObjectif' => $idObjectif
            ]);
        }
        return $this->render('ProjetBundle:ObjectifDA:modifier.html.twig',[
            'form' => $objectifForm->createView(),
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
            $id = $request->get('idObjectif');
            $em = $this->getDoctrine()->getManager();
            $situationAnnuelle = $this->getDoctrine()->getManager()->getRepository('ProjetBundle:SituationAnnuelle')->findOneBy(['id' => $idSituationAnnuelle ]);
            $objectif = $em->getRepository('ProjetBundle:ObjectifTrimestre')->find($id);
            $situationAnnuelle->removeObjectifTrimestre($objectif);
            $em->remove($objectif);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'success',
                "Suppression de l\'objectif effectuée"
            );
            $response = new JsonResponse();
            $response->setStatusCode(200);
            $response->setData(array(
                'successMessage' => "Supprimée"));
            return $this->redirectToRoute('projet_descriptif_activite_situation_annuelle_objectif_liste',[
                'projet_id' => $projet_id,
                'comp_id' => $comp_id,
                'act_id' => $act_id,
                'idDescriptifParUi' => $idDescriptifParUi,
                'idSituationAnnuelle' => $idSituationAnnuelle
            ]);
        }
    }
}
