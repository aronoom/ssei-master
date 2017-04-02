<?php
/**
 * Created by PhpStorm.
 * User: aro
 * Date: 20/03/2017
 * Time: 15:46
 */

namespace ProjetBundle\Controller;


use ProjetBundle\Entity\Composante;
use ProjetBundle\Form\ComposanteType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ComposanteController extends Controller
{
    private function findProjetById($id)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository("ProjetBundle:Projet");
        $projet = $repository->findOneBy(['id' => $id]);
        return $projet;
    }

    private function findComposanteById($id)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository("ProjetBundle:Composante");
        $composante = $repository->findOneBy(['id' => $id]);
        return $composante;
    }
    public function listerAction($projet_id)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository("ProjetBundle:Projet");
        $projet = $repository->findOneBy(['id' => $projet_id]);

        return $this->render('ProjetBundle:Composante:lister.html.twig', array(
            'projet_id' => $projet_id,
            'projet' => $projet,
            'composantes' => $projet->getComposantes($projet_id)));
    }

    public function ajouterAction($projet_id){
        $c = new Composante();
        $c->setProjet($this->findProjetById($projet_id));
        $form = $this->createForm(new ComposanteType(), $c);
        $request = $this->getRequest();

        if($request->isMethod('post')){
            $form->bind($request);
            $comp = $form->getData();
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($comp);
            $em->flush();

            $repository = $this->getDoctrine()->getManager()->getRepository("ProjetBundle:Projet");
            $c = $repository->find($comp);
            $c->setCodeComposante('composante '. $c->getId());
            $em->persist($c);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'success',
                "Ajout de la composante effectuée");
            return $this->redirectToRoute('projet_index', array('id'=> $projet_id));
        }

        return $this->render('ProjetBundle:Composante:ajouter.html.twig', array(
            'projet_id' => $projet_id,
            'form' => $form->createView()));
    }

    public function modifierAction($projet_id, $id){
        $c = $this->findComposanteById($id);
        $c->setProjet($this->findProjetById($projet_id));
        $form = $this->createForm(new ComposanteType(), $c);
        $request = $this->getRequest();

        if($request->isMethod('post')){
            $form->bind($request);
            $comp = $form->getData();
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($comp);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'success',
                "Modification de la composante effectuée");
            return $this->redirectToRoute('projet_index', array('id'=> $projet_id));
        }

        return $this->render('ProjetBundle:Composante:modifier.html.twig', array(
            'composante' => $c,
            'projet_id'=> $projet_id,
            'form' => $form->createView()));
    }

    public function supprimerAction(Request $request){
        if( $request->getMethod() == 'POST'){
            $id = $request->get('compId');
            $composante = $this->findComposanteById($id);
            $em = $this->getDoctrine()->getManager();
            $em->remove($composante);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'success',
                "Suppression de la composante effectuée");
        }
        return $this->redirectToRoute('projet_index', array('id'=>$request->get('projetId')));
    }
}