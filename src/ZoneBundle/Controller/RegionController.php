<?php
/**
 * Created by PhpStorm.
 * User: aro
 * Date: 23/02/2017
 * Time: 16:28
 */

namespace ZoneBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ZoneBundle\Entity\Region;
use ZoneBundle\Form\RegionType;

class RegionController extends Controller
{
    public function ajouterAction(){
        $request = $this->getRequest();
        if($request->isMethod('post')){
            $em = $this->getDoctrine()->getEntityManager();
            $r = new Region();
            $form = $this->createForm(new RegionType(), $r);
            $form->bind($request);
            $rgn = $form->getData();
            $em->persist($rgn);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'success',
                "Ajout de la région effectuée"
            );
        }
        return $this->redirectToRoute('zone_region');
    }

    public function listerAction(){
        $em = $this->getDoctrine()->getManager();
        $regions = $em->getRepository('ZoneBundle:Region')->findAll();
        $r = new Region();
        $form = $this->createForm(new RegionType(), $r);
        return $this->render('ZoneBundle:Region:index.html.twig', array(
            'form' => $form->createView(),
            'regions'=> $regions));
    }

    private function findRegionById($id){
        $repository = $this->getDoctrine()->getManager()->getRepository("ZoneBundle:Region");
        $region = $repository->findOneBy(['id' => $id]);
        return $region;
    }

    public function supprimerAction(Request $request){
        if( $request->getMethod() == 'POST'){
            $region = $this->findRegionById($request->get("regionId"));
            $em = $this->getDoctrine()->getManager();
            $em->remove($region);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'success',
                "Suppression de la région effectuée");
        }
        return $this->redirectToRoute('zone_region');
    }

    public function modifierAction($id){
        $em = $this->getDoctrine()->getEntityManager();
        $r = $this->findRegionById($id);
        $form = $this->createForm(new RegionType(), $r);

        $request = $this->getRequest();
        if($request->isMethod('post')){
            $form->bind($request);
            $rgn = $form->getData();
            $em->persist($rgn);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'success',
                "Modification de la région effectuée");
            return $this->redirectToRoute('zone_region');
        }

        return $this->render('ZoneBundle:Region:modifier.html.twig', array('id' => $id, 'form' => $form->createView()));
    }
}