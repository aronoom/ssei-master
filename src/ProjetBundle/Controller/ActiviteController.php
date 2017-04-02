<?php
/**
 * Created by PhpStorm.
 * User: aro
 * Date: 21/03/2017
 * Time: 15:27
 */

namespace ProjetBundle\Controller;


use ProjetBundle\Entity\ActiviteComposante;
use ProjetBundle\Form\ActiviteComposanteType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ActiviteController extends Controller
{

    private function findComposanteById($id)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository("ProjetBundle:Composante");
        $composante = $repository->findOneBy(['id' => $id]);
        return $composante;
    }

    private function findActiviteById($id)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository("ProjetBundle:ActiviteComposante");
        $activite = $repository->findOneBy(['id' => $id]);
        return $activite;
    }

    public function listerAction($projet_id, $comp_id){
        $em = $this->getDoctrine()->getManager();
        $composante = $em->getRepository('ProjetBundle:Composante')->find($comp_id);
        $activites = $composante->getActivites();

        return $this->render('ProjetBundle:Activite:liste.html.twig', [
            'composante'=> $composante,
            'activites'=> $activites
        ]);
    }

    public function ajouterAction($projet_id, $comp_id){
        $ac = new ActiviteComposante();
        $composante = $this->getDoctrine()->getManager()->getRepository('ProjetBundle:Composante')->findOneBy(['id'=>$comp_id]);
        $ac->setComposante($this->findComposanteById($comp_id));
        $form = $this->createForm(new ActiviteComposanteType(), $ac);
        $request = $this->getRequest();

        if($request->isMethod('post')){
            $form->bind($request);
            $comp = $form->getData();
            $codeActivite = $composante->getId().'.'. ($composante->getActivites()->count()+1);
            $comp->setCodeActivite($codeActivite);
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($comp);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'success',
                "Ajout de l'activité effectuée");
            return $this->redirectToRoute('projet_lister_activite', array(
                'projet_id'=> $projet_id,
                'comp_id'=> $comp_id));
        }
        return $this->render('ProjetBundle:Activite:ajouter.html.twig', array(
            'composante'=> $composante,
            'form' => $form->createView()));
    }

    public function modifierAction($projet_id, $comp_id, $id){
        $ac = $this->findActiviteById($id);
        $ac->setComposante($this->findComposanteById($comp_id));
        $form = $this->createForm(new ActiviteComposanteType(), $ac);
        $request = $this->getRequest();

        if($request->isMethod('post')){
            $form->bind($request);
            $comp = $form->getData();
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($comp);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'success',
                "Modification de l'activité effectuée");
            return $this->redirectToRoute('projet_lister_activite', array(
                'projet_id'=> $projet_id,
                'comp_id'=> $comp_id));
        }

        return $this->render('ProjetBundle:Activite:modifier.html.twig', array(
            'projet_id' => $projet_id,
            'comp_id' => $comp_id,
            'activite' => $ac,
            'form' => $form->createView()));
    }

    public function supprimerAction($idActivite, $projet_id,$comp_id, Request $request){
        if( $request->getMethod() == 'POST'){
            $em = $this->getDoctrine()->getManager();
            $activite = $em->getRepository('ProjetBundle:ActiviteComposante')->find($idActivite);
            $composante = $em->getRepository('ProjetBundle:Composante')->find($comp_id);
            /*
            foreach($activite->getDescriptifs() as $descriptif){
                $activite->removeDescriptif($descriptif);
            }
            */
            //$composante->removeActivite($activite);
            $em->remove($activite);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'success',
                "Suppression de l'activité effectuée");
        }
        return $this->redirectToRoute('projet_lister_activite', [
            'projet_id'=>$projet_id,
            'comp_id'=>$comp_id
        ]);
    }
}