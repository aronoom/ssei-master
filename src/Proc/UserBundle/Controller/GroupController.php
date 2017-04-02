<?php

namespace Proc\UserBundle\Controller;

use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use FOS\UserBundle\Propel\Group;
use Proc\UserBundle\Entity\GroupUser;
use Proc\UserBundle\Form\GroupUserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;


class GroupController extends Controller
{
    public function listeAction()
    {
        $repository = $this->getDoctrine()->getManager()->getRepository('UserBundle:GroupUser');
        $groupes = $repository->findAll();
        return $this->render('UserBundle:Group:liste.html.twig', array(
            'groupes' => $groupes
        ));
    }
    public function ajouterAction(Request $request)
    {
        $gp = new GroupUser();
        $gpForm = $this->createForm(new GroupUserType(), $gp);
        $gpForm->handleRequest($request);
        if( $request->getMethod() == 'POST')
        {
            if ($gpForm->isValid()) {
                $gp2 = $gpForm->getData();
                $response = new JsonResponse();
                if($this->findByCG($gp2->getCodeGroupUser()) == null) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($gp);
                    $em->flush();
                    $this->get('session')->getFlashBag()->add(
                        'success',
                        "Groupe ajouté"
                    );
                    $response->setStatusCode(200);
                    $response->setData(array('successMessage' => "Ajout effectué avec succes"));
                    return $this->redirectToRoute('groupe_user_liste');
                } else {
                    $response->setStatusCode(500);
                    $this->get('session')->getFlashBag()->add('notice_error', 'Code du groupe déja existant veuillez modifier');
                    $response->setData(array('errorMessage' => "Groupe déja existant"));
                    return $this->redirectToRoute('groupe_user_ajouter');
                }
            }
        }
        else {
            return $this->render('UserBundle:Group:ajouter.html.twig', [
                'form' => $gpForm->createView()
            ]);
        }
    }

    public function findByCG($code)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository("UserBundle:GroupUser");
        $obj = $repository->findOneBy(['codeGroupUser' => $code]);
        return $obj;
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

    public function modifierAction($id,Request $request)
    {
        $gu = $this->getDoctrine()->getManager()->getRepository('UserBundle:GroupUser')->findOneBy(['id'=> $id]);
        $guForm= $this->createForm(new GroupUserType(), $gu);
        $guForm->handleRequest($request);
        if( $request->getMethod() == 'POST')
        {
            if ($guForm->isValid())
            {
                $group2 = $guForm->getData();
                $response = new JsonResponse();
                try {
                    $em = $this->getDoctrine()->getManager();
                    $em->flush();
                    $this->get('session')->getFlashBag()->add(
                        'success',
                        "Modification du groupe effectuée"
                    );
                    $response->setStatusCode(200);
                    $response->setData(array('successMessage' => "Modification réussi"));
                    return $this->redirectToRoute('groupe_user_liste');
                }catch (UniqueConstraintViolationException $ex){
                    $this->get('session')->getFlashBag()->add('notice_error', 'Code du groupe déja existant veuillez modifier');
                    $response->setStatusCode(500);
                    $response->setData(array('errorMessage' => "Groupe déja existant"));
                    return $this->redirectToRoute('groupe_user_modifier',['id' => $id]);
                }
            }
        }
        return $this->render('UserBundle:Group:modifier.html.twig',array('form' => $guForm->createView()));
    }

    public function supprAction(Request $request)
    {
        if( $request->getMethod() == 'POST')
        {
            $id = $request->get('idGroup');
            $em = $this->getDoctrine()->getManager();
            $groupe = $this->getDoctrine()->getManager()->getRepository('UserBundle:GroupUser')->findOneBy(['id' => $id ]);
            $em->remove($groupe);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'success',
                "Suppression du groupe effectuée"
            );
            $response = new JsonResponse();
            $response->setStatusCode(200);
            $response->setData(array(
                'successMessage' => "Deleted"));
            return $this->redirectToRoute('groupe_user_liste');
        }
    }
}
