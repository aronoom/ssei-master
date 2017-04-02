<?php
/**
 * Created by PhpStorm.
 * User: aro
 * Date: 26/02/2017
 * Time: 00:30
 */

namespace ZoneBundle\Controller;


use ZoneBundle\Entity\Region;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ZoneBundle\Entity\District;
use ZoneBundle\Form\DistrictType;

class  DistrictController extends Controller
{
    public function listerAction($region_id){
        $d = new District();
        $currentRegion = $this->findRegionById($region_id);
        $d->setRegion($currentRegion);
        $form = $this->createForm(new DistrictType(), $d);
        $repository = $this->getDoctrine()->getManager()->getRepository("ZoneBundle:District");
        $districts = $repository->findBy(['regionId' => $region_id]);
        $labelle = $this->findRegionById($region_id)->getRegionLibelle();
        return $this->render('ZoneBundle:District:index.html.twig', array(
            'region_id'=> $region_id,
            'districts'=> $districts,
            'libelle' => $labelle,
            'form' => $form->createView()));
    }
    
    private function findRegionById($id)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository("ZoneBundle:Region");
        $region = $repository->findOneBy(['id' => $id]);
        return $region;
    }

    private function findDistrictById($id)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository("ZoneBundle:District");
        $district = $repository->findOneBy(['id' => $id]);
        return $district;
    }

    public function ajouterAction($region_id){
        $request = $this->getRequest();
        if($request->isMethod('post')){
            $d = new District();
            $d->setRegion($this->findRegionById($region_id));
            $form = $this->createForm(new DistrictType(), $d);
            $form->bind($request);
            $dist = $form->getData();
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($dist);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'success',
                "Ajout de la district effectuée"
            );
        }
        return $this->redirectToRoute('zone_district', array('region_id'=> $region_id));
    }

    public function supprimerAction(Request $request){
        $district = $this->findDistrictById($request->get('districtId'));
        $region_id = $district->getRegion()->getId();
        if( $request->getMethod() == 'POST'){
            $em = $this->getDoctrine()->getManager();
            $em->remove($district);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'success',
                "Suppression de la district effectuée"
            );
        }
        return $this->redirectToRoute('zone_district', array('region_id'=> $region_id));
    }

    public function modifierAction($region_id, $id){
        $em = $this->getDoctrine()->getEntityManager();
        $d = $this->findDistrictById($id);
        $form = $this->createForm(new DistrictType(), $d);

        $request = $this->getRequest();
        if($request->isMethod('post')){
            $form->bind($request);
            $rgn = $form->getData();
            $em->persist($rgn);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'success',
                "Modification de la district effectuée"
            );
            return $this->redirectToRoute('zone_district', array('region_id'=> $region_id));
        }

        return $this->render('ZoneBundle:District:modifier.html.twig', array(
            'region_id'=> $region_id,
            'id' => $id,
            'form' => $form->createView()));
    }
}