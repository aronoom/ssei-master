<?php
/**
 * Created by PhpStorm.
 * User: aro
 * Date: 26/02/2017
 * Time: 00:30
 */

namespace ZoneBundle\Controller;


use ZoneBundle\Entity\District;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ZoneBundle\Entity\Commune;
use ZoneBundle\Form\CommuneType;

class CommuneController extends Controller
{
    public function listerAction($district_id, $region_id){
        $c = new Commune();
        $currentDistrict = $this->findDistrictById($district_id);
        $c->setDistrict($currentDistrict);
        $form = $this->createForm(new CommuneType(), $c);
        $repository = $this->getDoctrine()->getManager()->getRepository("ZoneBundle:Commune");
        $communes = $repository->findBy(['districtId' => $district_id]);
        $libelle = $this->findDistrictById($district_id)->getDistrictLibelle();
        return $this->render('ZoneBundle:Commune:index.html.twig', array(
            'district_id'=> $district_id,
            'region_id'=> $region_id,
            'libelle'=> $libelle,
            'communes'=> $communes,
            'form' => $form->createView()));
    }
    private function findDistrictById($id)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository("ZoneBundle:District");
        $district = $repository->findOneBy(['id' => $id]);
        return $district;
    }

    private function findCommuneById($id)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository("ZoneBundle:Commune");
        $commune = $repository->findOneBy(['id' => $id]);
        return $commune;
    }

    public function ajouterAction($district_id, $region_id){
        $request = $this->getRequest();
        if($request->isMethod('post')){
            $c = new Commune();
            $c->setDistrict($this->findDistrictById($district_id));
            $form = $this->createForm(new CommuneType(), $c);
            $form->bind($request);
            $dist = $form->getData();
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($dist);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'success',
                "Ajout de la commune effectuée"
            );
        }
        return $this->redirectToRoute('zone_commune', array(
            'district_id'=> $district_id,
            'region_id'=> $region_id));
    }

    public function supprimerAction(Request $request){
        $commune = $this->findCommuneById($request->get('communeId'));
        $district_id = $commune->getDistrict()->getId();
        $region_id = $this->findDistrictById($district_id)->getRegion()->getId();
        if( $request->getMethod() == 'POST'){
            $em = $this->getDoctrine()->getManager();
            $em->remove($commune);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'success',
                "Suppression de la commune effectuée"
            );
        }
        return $this->redirectToRoute('zone_commune', array(
            'district_id'=> $district_id,
            'region_id'=> $region_id));
    }

    public function modifierAction($region_id, $district_id, $id){
        $em = $this->getDoctrine()->getEntityManager();
        $d = $this->findCommuneById($id);
        $form = $this->createForm(new CommuneType(), $d);

        $request = $this->getRequest();
        if($request->isMethod('post')){
            $form->bind($request);
            $rgn = $form->getData();
            $em->persist($rgn);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'success',
                "Modification de la commune effectuée"
            );
            return $this->redirectToRoute('zone_commune', array(
                'district_id'=> $district_id,
                'region_id'=> $region_id));
        }

        return $this->render('ZoneBundle:Commune:modifier.html.twig', array(
            'district_id'=> $district_id,
            'region_id'=> $region_id,
            'id' => $id,
            'form' => $form->createView()));
    }
}