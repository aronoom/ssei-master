<?php

namespace ProjetBundle\Controller;

use ProjetBundle\Entity\Descriptif_par_ui;
use ProjetBundle\Entity\Descriptif_projet;
use ProjetBundle\Entity\Projet;
use ProjetBundle\Form\Descriptif_par_uiType;
use ProjetBundle\Form\Descriptif_projetType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DescriptifController extends Controller
{
    public function  ajouterAction($id)
    {
        $request = $this->getRequest();
        $projet = $this->getDoctrine()->getManager()->getRepository('ProjetBundle:Projet')->find($id);
        $regions = $projet->getRegions();
        $unites = $this->getDoctrine()->getManager()->getRepository('IndicateurBundle:Unite')->findAll();
        $indicateurs = $this->getDoctrine()->getManager()->getRepository('IndicateurBundle:Indicateur')->findAll();
        if($request->getMethod() == 'POST')
        {
            $indicateur_id = $request->request->all()["indicateur"];
            $commune_id = $request->request->all()["commune"];
            $unite_id = $request->request->all()["unite"];
            // objects are here
            $requests = $request->request->all();
            $indicateur = $this->getDoctrine()->getManager()->getRepository('IndicateurBundle:Indicateur')->find($indicateur_id);

            $descriptif = new Descriptif_projet();
            $descriptif->setProjet($projet);
            $descriptif_par_ui = new Descriptif_par_ui();
            $descriptif_par_ui->setBaselineDescParUi($requests["baseline"]);
            $descriptif_par_ui->setExplicationDescParUi($requests["explication"]);
            $descriptif_par_ui->setObjectifDescParUi($requests["objectif"]);
            $descriptif_par_ui->setRealCumulParUi($requests["realisation"]);
            $descriptif_par_ui->setIndicateur($indicateur);
            foreach ($requests["commune"] as $id){
                $commune = $this->getDoctrine()->getManager()->getRepository('ZoneBundle:Commune')->find($id);
                $descriptif_par_ui->addCommune($commune);
            }
            foreach ($requests["unite"] as $id){
                $unite = $this->getDoctrine()->getManager()->getRepository('IndicateurBundle:Unite')->find($id);
                $descriptif_par_ui->addUnite($unite);
            }
            $em = $this->getDoctrine()->getManager();
            $descriptif_par_ui->setDescriptifProjet($descriptif);
            $projet->addDescriptifProjet($descriptif);
            $em->persist($descriptif_par_ui);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'success',
                "Descriptif ajouté"
            );
            $response = new JsonResponse();
            $response->setStatusCode(200);
            $response->setData(array('successMessage' => "Ajout effectué avec succes"));
            return $this->redirectToRoute('projet_index',['id' => $projet->getId() ]);
        }
        return $this->render('ProjetBundle:Descriptif:ajouter.html.twig', [
            'projet' => $projet,
            'indicateurs'=>$indicateurs,
            'regions' => $regions,
            'unites'=>$unites,
        ]);
    }

    public function modifierAction($idDescriptifProjet,$idDescriptifParUi, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $descriptifProjet = $em->getRepository('ProjetBundle:Descriptif_projet')->find($idDescriptifProjet);
        $projet = $descriptifProjet->getProjet();
        $descriptif_par_ui = $em->getRepository('ProjetBundle:Descriptif_par_ui')->find($idDescriptifParUi);
        $regions = $projet->getRegions();
        $unites = $this->getDoctrine()->getManager()->getRepository('IndicateurBundle:Unite')->findAll();
        $indicateurs = $this->getDoctrine()->getManager()->getRepository('IndicateurBundle:Indicateur')->findAll();
        if( $request->getMethod() == 'POST')
        {
            $indicateur_id = $request->request->all()["indicateur"];
            $commune_id = $request->request->all()["commune"];
            $unite_id = $request->request->all()["unite"];
            // objects are here
            $requests = $request->request->all();
            $indicateur = $this->getDoctrine()->getManager()->getRepository('IndicateurBundle:Indicateur')->find($indicateur_id);        


            $descriptif_par_ui->setBaselineDescParUi($requests["baseline"]);
            $descriptif_par_ui->setExplicationDescParUi($requests["explication"]);
            $descriptif_par_ui->setObjectifDescParUi($requests["objectif"]);
            $descriptif_par_ui->setRealCumulParUi($requests["realisation"]);
            $descriptif_par_ui->setIndicateur($indicateur);            
            $descriptif_par_ui->removeCommunes();                   
            foreach ($requests["commune"] as $id){
                $commune = $this->getDoctrine()->getManager()->getRepository('ZoneBundle:Commune')->find($id);
                $descriptif_par_ui->addCommune($commune);
            }
            $descriptif_par_ui->removeUnites();
            foreach ($requests["unite"] as $id){
                $unite = $this->getDoctrine()->getManager()->getRepository('IndicateurBundle:Unite')->find($id);
                $descriptif_par_ui->addUnite($unite);
            }                        
            $em->persist($projet);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'success',
                "Descriptif modifié"
            );
            $response = new JsonResponse();
            $response->setStatusCode(200);
            $response->setData(array('successMessage' => "Modification effectué avec succes"));
            return $this->redirectToRoute('projet_index',['id' => $projet->getId() ]);   
        }
        return $this->render('ProjetBundle:Descriptif:modifier.html.twig',[
            'descriptifProjet' => $descriptifProjet,
            'descriptifParUi' => $descriptif_par_ui,
            'projet' => $projet,
            'indicateurs'=>$indicateurs,
            'regions' => $regions,
            'unites'=>$unites,
        ]);
    }

    // delete a descriptifProjet by getting its id and cascading through its descriptifParUi
    public function supprimerAction(Request $request)
    {
        if( $request->getMethod() == 'POST')
        {
            $descriptifProjetId = $request->get('idDescriptif');                    
            $em = $this->getDoctrine()->getManager();         
            $descriptifProjet = $this->getDoctrine()->getManager()->getRepository('ProjetBundle:Descriptif_projet')->findOneBy(['id' => $descriptifProjetId ]);
            $projet = $descriptifProjet->getProjet();
            $em->remove($descriptifProjet);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'success',
                "Suppression du descriptif effectuée"
            );
            $response = new JsonResponse();
            $response->setStatusCode(200);
            $response->setData(array(
                'successMessage' => "Deleted"));
            return $this->redirectToRoute('projet_index',['id' => $projet->getId() ]);
        }
    }



    /*
    public function ajouterAction(Request $request)
    {
        $descriptifParUI = new Descriptif_par_ui();
        $desForm = $this->createForm(new Descriptif_par_uiType(), $descriptifParUI);
        $desForm->handleRequest($request);
        if( $request->getMethod() == 'POST')
        {
            if ($desForm->isValid())
            {
                $descriptifParUI = $desForm->getData();
                $response = new JsonResponse();
                $em = $this->getDoctrine()->getManager();
                $em->persist($descriptifParUI);
                $em->flush();
                $this->get('session')->getFlashBag()->add(
                    'success',
                    "Descriptif ajouté"
                );
                $response->setStatusCode(200);
                $response->setData(array('successMessage' => "Ajout effectué avec succes"));
                return $this->redirectToRoute('projet_descriptif_ajouter');
            }
        }
        return $this->render('ProjetBundle:Descriptif:ajouter.html.twig', [
            'form' => $desForm->createView()
        ]);
    }
    */
}
