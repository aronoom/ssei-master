<?php

namespace Proc\UserBundle\Controller;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use Proc\UserBundle\Entity\Entite;
use Proc\UserBundle\Form\EntiteType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
class EntiteController extends Controller
{
    public function listeAction()
    {
        $repository = $this->getDoctrine()->getManager()->getRepository('UserBundle:Entite');
        $entites = $repository->findAll();
        return $this->render('UserBundle:Entite:liste.html.twig', array(
            'entites' => $entites
        ));
    }
    public function ajouterAction(Request $request)
    {
        $entite = new Entite();
        $entiteForm = $this->createForm(new EntiteType(), $entite);
        $entiteForm->handleRequest($request);
        if( $request->getMethod() == 'POST')
        {
            if ($entiteForm->isValid())
            {
                $entite = $entiteForm->getData();
                $response = new JsonResponse();
                try {
                    $em = $this->getDoctrine()->getManager();
                    //$enite->setLibelle()// ce libelle montre le nom de l'entite
                    $str = $entite->getCodeEntite() .' ['.$entite->getGroupe()->getCodeGroupUser().']';
                    $entite->setLibelleEntite($str);
                    $em->persist($entite);
                    $em->flush();
                    $this->get('session')->getFlashBag()->add(
                        'success',
                        "Entité ajouté"
                    );
                    $response->setStatusCode(200);
                    $response->setData(array('successMessage' => "Ajout effectué avec succes"));
                    return $this->redirectToRoute('entite_liste');
                } catch (UniqueConstraintViolationException $ex) {
                    $response->setStatusCode(500);
                    $this->get('session')->getFlashBag()->add('notice_error', 'Code de l\'entité déja existant veuillez modifier');
                    $response->setData(array('errorMessage' => "Entité déja existant"));
                    return $this->redirectToRoute('entite_ajouter');
                }
            }else {
                $response = new JsonResponse();
                $response->setStatusCode(500);
                $this->get('session')->getFlashBag()->add('notice_error', 'Cette entité existe déja');
                $response->setData(array('errorMessage' => "Entité déja existant"));
                return $this->redirectToRoute('entite_ajouter');
            }
        }
        return $this->render('UserBundle:Entite:ajouter.html.twig', [
            'form' => $entiteForm->createView()
        ]);
    }
    protected function getErrorsAsArray($form)
    {
        $errors = array();
        foreach ($form->getErrors() as $error)
            $errors[] = $error->getMessage();

        foreach ($form->all() as $key => $child) {
            if ($err = $this->getErrorsAsArray($child))
                $errors[$key] = $err;
        }
        return $errors;
    }
    public function supprAction(Request $request)
    {
        if( $request->getMethod() == 'POST')
        {
            $id = $request->get('idEntite');
            $em = $this->getDoctrine()->getManager();
            $entite = $this->getDoctrine()->getManager()->getRepository('UserBundle:Entite')->findOneBy(['id' => $id ]);
            $em->remove($entite);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'success',
                "Suppression de l'entite effectuée"
            );
            $response = new JsonResponse();
            $response->setStatusCode(200);
            $response->setData(array(
                'successMessage' => "Deleted"));
            return $this->redirectToRoute('entite_liste');
        }
    }
    public function modifierAction($id,Request $request)
    {
        $entite = $this->getDoctrine()->getManager()->getRepository('UserBundle:Entite')->findOneBy(['id'=> $id]);
        $entiteForm= $this->createForm(new EntiteType(), $entite);
        $entiteForm->handleRequest($request);
        if( $request->getMethod() == 'POST')
        {
            if ($entiteForm->isValid())
            {
                $entite2 = $entiteForm->getData();
                $response = new JsonResponse();
                try{
                    $em = $this->getDoctrine()->getManager();
                    $str = $entite->getCodeEntite() .' ['.$entite->getGroupe()->getCodeGroupUser().']';
                    $entite->setLibelleEntite($str);
                    $em->flush();
                    $this->get('session')->getFlashBag()->add('success', "Modification de l'enité effectuée");
                    $response->setStatusCode(200);
                    $response->setData(array('successMessage' => "Modification réussi"));
                    return $this->redirectToRoute('entite_liste');
                }catch (UniqueConstraintViolationException $ex){
                    $this->get('session')->getFlashBag()->add('notice_error', 'L\'entité existe déja veuillez modifier');
                    $response->setStatusCode(500);
                    $response->setData(array('errorMessage' => "Entité déja existant"));
                }
            } else {
                $response = new JsonResponse();
                $this->get('session')->getFlashBag()->add('notice_error', 'L\'entité existe déja veuillez modifier');
                $response->setStatusCode(500);
                $response->setData(array('errorMessage' => "Entité déja existant"));
            }
            return $this->redirectToRoute('entite_modifier',['id' => $id]);
        }
        return $this->render('UserBundle:Entite:modifier.html.twig',[
            'form' => $entiteForm->createView()
        ]);
    }
}