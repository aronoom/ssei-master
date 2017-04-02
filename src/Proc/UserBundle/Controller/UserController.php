<?php
namespace Proc\UserBundle\Controller;

use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use Proc\UserBundle\Form\AgentType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Proc\UserBundle\Entity\Agent;
use Proc\UserBundle\Form\AgentAddType;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\Request;
class UserController extends Controller
{
    public function indexAction()
    {
        $repository = $this->getDoctrine()->getManager()->getRepository('UserBundle:Agent');
        $agents = $repository->findAll();
        return $this->render('UserBundle:User:liste.html.twig',[
            'agents' => $agents
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
    public function userListAction()
    {
        $container = $this->get('service_container');
        $userManager = $container->get('fos_user.user_manager');
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('UserBundle:Agent')->findAll();
        $resultat = [];
        foreach($users as $user)
        {
            $resultat[] = array('id'=>$user->getId(),
                                'username' => $user->getUserName(),
                                'contactAgent' => $user->getContactAgent(),
                                'email' => $user->getEmail(),
                                'adresseAgent' => $user->getAdresseAgent(),
                                'service_user' => $user->getServiceUser(),
                                'fonction_user' => $user->getFonctionUser(),
                                'direction_user' => $user->getDirectionUser()
                    );
        }
        $response = new Response();
	$response->headers->set('Content-Type', 'application/json');
        $response->setStatusCode(200);
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        $jsonContent = $serializer->serialize($resultat, 'json');
        $response->setContent($jsonContent);
        return $response;    
    }
    public function userAddAction(Request $request)
    {
        $agent = new Agent();
        $agentForm = $this->createForm(new AgentAddType(), $agent);
        $agentForm->handleRequest($request);
        if( $request->getMethod() == 'POST')
        {
	        if ($agentForm->isValid()) {
                $user2 = $agentForm->getData();
                $response = new JsonResponse();
                if($this->findByName($user2->getUsername()) == null) {
                    $em = $this->getDoctrine()->getManager();
                    $agent->setEnabled(true);
                    $em->persist($agent);
                    $em->flush();
                    $this->get('session')->getFlashBag()->add(
                        'success',
                        "Utilisateur ajouté"
                    );
                    $response->setStatusCode(200);
                    $response->setData(array('successMessage' => "Ajout effectué avec succes"));
                } else {
                    $this->get('session')->getFlashBag()->add(
                        'error',
                        "Nom de l'utiliisateur déja existant"
                    );
                    $response->setStatusCode(500);
                    $response->setData(array('erroMessage' => "Modification échoué"));
                }
                return $this->redirectToRoute('user_admin_homepage');
            }
    	}
    	else {
            return $this->render('UserBundle:User:ajouter.html.twig', [
                'form' => $agentForm->createView()
            ]);
        }
    }
    public function findByName($name){
        $user = null;
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('UserBundle:Agent')->findOneBy(['username' => $name ]);
        return $user;
    }
    public function userEditAction(Agent $agent,Request $request)
    {
        $agentForm   = $this->createForm(new AgentType(), $agent);
        if( $request->getMethod() == 'POST')
        {
            $agentForm->bind($request);
	        if ($agentForm->isValid()) {
                $response = new JsonResponse();
                try{
                    $em = $this->getDoctrine()->getManager();
                    $em->flush();
                    $this->get('session')->getFlashBag()->add(
                        'success',
                        "Modification de l'utilisateur effectuée"
                    );
                    $response->setStatusCode(200);
                    $response->setData(array('successMessage' => "Modification réussi"));
                    return $this->redirectToRoute('user_admin_homepage');
                }catch (UniqueConstraintViolationException $ex){
                    $this->get('session')->getFlashBag()->add('notice_error', 'L\'adresse e-mail de l\'utilisateur existe déja prise, veuillez modifier');
                    $response->setStatusCode(500);
                    $response->setData(array('errorMessage' => "Utilisateur déja existant"));
                }
                return $this->redirectToRoute('user_admin_userEdit',['id' => $agent->getId()]);
            }
    	}
    	return $this->render('UserBundle:User:modifier.html.twig',array('form' => $agentForm->createView()));
    }

    public function userShowAction(Agent $agent){
        return $this->render('UserBundle:User:show.html.twig',[
            "agent" => $agent
        ]);
    }
    public function userDelAction(Request $request)
    {
        if( $request->getMethod() == 'POST')
        {
            $id = $request->get('idAgent');
            $em = $this->getDoctrine()->getManager();
            $agent = $this->getDoctrine()->getManager()->getRepository('UserBundle:Agent')->findOneBy(['id' => $id ]);
            $em->remove($agent);
            $em->flush();   
            $this->get('session')->getFlashBag()->add(
                        'success',
                        "Suppression de l'utilisateur effectuée"
            );            
            $response = new JsonResponse();
            $response->setStatusCode(200);
            $response->setData(array(
                'successMessage' => "Deleted"));
            return $this->redirectToRoute('user_admin_homepage');
        }        
    }
}
