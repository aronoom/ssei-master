<?php

namespace ProjetBundle\Controller;

use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ProjetBundle\Entity\SituationAnnuelle;
use ProjetBundle\Form\SituationAnnuelleType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class SituationAnnuelleController extends Controller
{
	    //on ajoute par parlé une situation annuelle au idDescriptifProjet mais en generale on ajoute a son descriptifParUi (idDescriptifProjet.descriptifParUi)
    public function listeAction($idDescriptifProjet,$idDescriptifParUi)
    {
        $em = $this->getDoctrine()->getManager();
        $descriptifParUi = $this->getDoctrine()->getManager()->getRepository('ProjetBundle:Descriptif_par_ui')->findOneBy(['id' => $idDescriptifParUi ]);
        $descriptifProjet = $this->getDoctrine()->getManager()->getRepository('ProjetBundle:Descriptif_projet')->find($idDescriptifProjet);
        $projet = $descriptifProjet->getProjet();
        $situationAnnuelles = $descriptifParUi->getSituationAnnuelles();
        return $this->render('ProjetBundle:SituationAnnuelle:liste.html.twig',[            
            'descriptifParUi' => $descriptifParUi,
            'descriptifProjet' => $descriptifProjet,
            'projet' => $projet,
            'situationAnnuelles' => $situationAnnuelles
        ]);
    }

    public function ajouterAction($idDescriptifProjet,$idDescriptifParUi)
    {
    	$request = $this->getRequest();
        $em = $this->getDoctrine()->getManager();
        $descriptifParUi = $this->getDoctrine()->getManager()->getRepository('ProjetBundle:Descriptif_par_ui')->findOneBy(['id' => $idDescriptifParUi ]);
        $descriptifProjet = $this->getDoctrine()->getManager()->getRepository('ProjetBundle:Descriptif_projet')->find($idDescriptifProjet);
        $projet = $descriptifProjet->getProjet();        
        $situationAnnuelle = new SituationAnnuelle();
        $situationForm = $this->createForm(new SituationAnnuelleType(), $situationAnnuelle);
        $situationForm->handleRequest($request);
        if( $request->getMethod() == 'POST')
        {
            if ($situationForm->isValid())
            {
                $SituationAnnuelle = $situationForm->getData();
                $response = new JsonResponse();
                try {
                    $em = $this->getDoctrine()->getManager();
                    $situationAnnuelle->setDescriptifParUi($descriptifParUi);
                    $em->persist($situationAnnuelle);
                    $em->flush();
                    $this->get('session')->getFlashBag()->add(
                        'success',
                        "Situation annuelle ajoutée"
                    );
                    $response->setStatusCode(200);
                    $response->setData(array('successMessage' => "Ajout effectué avec succes"));
                    return $this->redirectToRoute('projet_descriptif_situation_annuelle_liste',[
                    	'idDescriptifProjet' => $idDescriptifProjet,
                    	'idDescriptifParUi' => $idDescriptifParUi
                    	]);
                } catch (UniqueConstraintViolationException $ex) {
                    $response->setStatusCode(500);
                    $this->get('session')->getFlashBag()->add('notice_error', 'La situation annuelle existe déja veuillez modifier');
                    $response->setData(array('errorMessage' => "Situation annuelle déja existant"));
                    return $this->redirectToRoute('projet_descriptif_situation_annuelle_ajouter',[
                	'idDescriptifProjet' => $idDescriptifProjet,
                    'idDescriptifParUi' => $idDescriptifParUi
                	]);
                }
            }else {
                $response = new JsonResponse();
                $response->setStatusCode(500);
                $this->get('session')->getFlashBag()->add('notice_error', 'Cette situtation annuelle existe déja');
                $response->setData(array('errorMessage' => "Situation déja existant"));
                return $this->redirectToRoute('projet_descriptif_situation_annuelle_ajouter',[
                	'idDescriptifProjet' => $idDescriptifProjet,
                    'idDescriptifParUi' => $idDescriptifParUi
                ]);
            }
        }
        return $this->render('ProjetBundle:SituationAnnuelle:ajouter.html.twig', [
            'form' => $situationForm->createView(),
        	'descriptifParUi' => $descriptifParUi,
            'descriptifProjet' => $descriptifProjet,
            'projet' => $projet
        ]);        
    }

    public function modifierAction($idDescriptifProjet,$idDescriptifParUi,$idSituationAnnuelle,Request $request)
    {
        $request = $this->getRequest();
        $em = $this->getDoctrine()->getManager();
        $descriptifParUi = $this->getDoctrine()->getManager()->getRepository('ProjetBundle:Descriptif_par_ui')->findOneBy(['id' => $idDescriptifParUi ]);
        $descriptifProjet = $this->getDoctrine()->getManager()->getRepository('ProjetBundle:Descriptif_projet')->find($idDescriptifProjet);
        $projet = $descriptifProjet->getProjet();        
        $situationAnnuelle = $this->getDoctrine()->getManager()->getRepository('ProjetBundle:SituationAnnuelle')->find($idSituationAnnuelle);
        $situationForm = $this->createForm(new SituationAnnuelleType(), $situationAnnuelle);
        $situationForm->handleRequest($request);
        if( $request->getMethod() == 'POST')
        {
            if ($situationForm->isValid())
            {
                $situationAnnuelle = $situationForm->getData();
                $response = new JsonResponse();
                try{
                    $em = $this->getDoctrine()->getManager();
                    $em->flush();
                    $this->get('session')->getFlashBag()->add('success', "Modification de la situation annuelle effectuée");
                    $response->setStatusCode(200);
                    $response->setData(array('successMessage' => "Modification réussi"));
                    return $this->redirectToRoute('projet_descriptif_situation_annuelle_liste',[
                    	'idDescriptifProjet' => $idDescriptifProjet,
                    	'idDescriptifParUi' => $descriptifParUi->getId()
                    ]);
                }catch (UniqueConstraintViolationException $ex){
                    $this->get('session')->getFlashBag()->add('notice_error', 'La situation annuele existe déja veuillez modifier');
                    $response->setStatusCode(500);
                    $response->setData(array('errorMessage' => "Situationt déja existant"));
                	return $this->redirectToRoute('projet_descriptif_situation_annuelle_liste',[
                    	'idDescriptifProjet' => $idDescriptifProjet,
                    	'idDescriptifParUi' => $idDescriptifParUi,
                    	'idSituationAnnuelle' => $idSituationAnnuelle
                    	]);
                }
            } else {
                $response = new JsonResponse();
                $this->get('session')->getFlashBag()->add('notice_error', 'L\'activité existe déja veuillez modifier');
                $response->setStatusCode(500);
                $response->setData(array('errorMessage' => "Activité déja existant"));
            }
            return $this->redirectToRoute('projet_descriptif_situation_annuelle_modifier',['idDescriptifProjet' => $idDescriptifProjet,
            	'idDescriptifParUi' => $descriptifParUi->getId(),
            	'idSituationAnnuelle' => $idSituationAnnuelle ]);
        }
        return $this->render('ProjetBundle:SituationAnnuelle:modifier.html.twig',[            
            'form' => $situationForm->createView(),
        	'descriptifParUi' => $descriptifParUi,
            'descriptifProjet' => $descriptifProjet,
            'projet' => $projet,
        ]);
    }
    // suppression d'une situation annuelle
    public function supprimerAction($idDescriptifProjet, Request $request)
    {
        if( $request->getMethod() == 'POST')
        {
            $id = $request->get('idSituation');
            $em = $this->getDoctrine()->getManager();
            $situationAnnuelle = $this->getDoctrine()->getManager()->getRepository('ProjetBundle:SituationAnnuelle')->findOneBy(['id' => $id ]);
            $descriptifParUi = $situationAnnuelle->getDescriptifParUi();
            $descriptifParUi->removeSituationAnnuelle($situationAnnuelle);                       
            $em->remove($situationAnnuelle);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'success',
                "Suppression de la situation annuelle effectuée"
            );
            $response = new JsonResponse();
            $response->setStatusCode(200);
            $response->setData(array(
                'successMessage' => "Supprimée"));
            return $this->redirectToRoute('projet_descriptif_situation_annuelle_liste',[
                    	'idDescriptifProjet' => $idDescriptifProjet,
                    	'idDescriptifParUi' => $descriptifParUi->getId()
                    	]);
        }
    }
}
