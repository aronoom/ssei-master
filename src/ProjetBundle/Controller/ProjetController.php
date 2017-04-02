<?php

namespace ProjetBundle\Controller;

use Doctrine\Common\Collections\ArrayCollection;
use ProjetBundle\Entity\Projet;
use ProjetBundle\Form\ProjetType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authorization\AuthorizationChecker;

class ProjetController extends Controller
{
    public function checkAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $user->setStatusUser(1);
        $em->persist($user);
        $em->flush();
        return $this->redirectToRoute('projet_homepage');
    }

    // here begin the projet from Aro
    public function indexAction($id)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository("ProjetBundle:Projet");
        $projet = $repository->findOneBy(['id' => $id]);
        $descriptifs = $projet->getDescriptifProjets();

        return $this->render('ProjetBundle:Projet:index.html.twig', array(
            'projet' => $projet,
            'descriptifs'=>$descriptifs,
            'id' => $id
        ));
    }

    public function listerAction(){
        $state = $this->getUser()->getStatusUser();
        if( $state == false){
            return $this->redirectToRoute('fos_user_profile_show');// si l'utilisateur n'est pas encore activé => checkit
        }
        $entites = $this->getUser()->getEntites();
        $projets = new ArrayCollection();
        foreach($entites as $ent){
            $projs = $ent->getProjets();
            foreach($projs as $proj){
                $projets->add($proj);
            }
        }
        //$em = $this->getDoctrine()->getManager();
        //$projets = $em->getRepository('ProjetBundle:Projet')->findAll();
        return $this->render('ProjetBundle:Projet:liste.html.twig', array(
            'projets'=> $projets));
    }

    public function ajouterAction(){
        $p = new Projet();
        $form = $this->createForm(new ProjetType(), $p);
        $request = $this->getRequest();

        if($request->isMethod('post')){
            $form->bind($request);
            $rgn = $form->getData();
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($rgn);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'success',
                "Modification du projet effectuée");
            return $this->redirectToRoute('projet_homepage');
        }
        return $this->render('ProjetBundle:Projet:ajout.html.twig', array(
            'form' => $form->createView()));
    }

    public function supprimerAction(Request $request){
        if( $request->getMethod() == 'POST'){
            $id = $request->get('projetIdSupr');
            $repository = $this->getDoctrine()->getManager()->getRepository("ProjetBundle:Projet");
            $projet = $repository->findOneBy(['id' => $id]);
            $em = $this->getDoctrine()->getManager();
            $em->remove($projet);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'success',
                "Suppression du projet effectuée");
        }
        return $this->redirectToRoute('projet_homepage');
    }

    public function modifierAction($id){
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $this->getDoctrine()->getManager()->getRepository("ProjetBundle:Projet");
        $p = $repository->findOneBy(['id' => $id]);
        $form = $this->createForm(new ProjetType(), $p);

        $request = $this->getRequest();
        if($request->isMethod('post')){
            $form->bind($request);
            $rgn = $form->getData();
            $em->persist($rgn);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'success',
                "Modification du projet effectuée");
            return $this->redirectToRoute('projet_homepage');
        }

        return $this->render('ProjetBundle:Projet:modifier.html.twig', array('form' => $form->createView()));
    }
}
