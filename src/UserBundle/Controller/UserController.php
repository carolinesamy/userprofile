<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use UserBundle\Entity\User;
use UserBundle\Entity\Phone;
use UserBundle\Form\UserType;
use UserBundle\Form\PhoneType;
use UserBundle\Form\LoginType;

class UserController extends Controller {

    /**
     * @Route("/user", name="list_users")
     */
    public function listUsersAction(Request $request) {
//        $users = $this->getDoctrine()
//                ->getRepository('UserBundle:User')
//                ->findAll();

        $em = $this->getDoctrine()->getManager();
        $dql = "SELECT a FROM UserBundle:User a";
        $query = $em->createQuery($dql);

//        if (!$users) {
//            throw $this->createNotFoundException(
//                    'No users found'
//            );
//        }

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($query, $request->query->getInt('page', 1), 5);

        return $this->render('UserBundle:User:listUsers.html.twig', array('pagination' => $pagination));
    }

    /**
     * @Route("/user/login", name="login")
     */
    public function loginUsersAction(Request $request) {

        $form = $this->createForm(LoginType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $name = $form["name"]->getData();

            $user = $this->getDoctrine()
                    ->getRepository('UserBundle:User')
                    ->findOneBy(array("name" => $name));
            if ($user) {
                $session = new Session();

                $session->set('name', $name);
                $session->set('id', $user->getId());

                return $this->redirectToRoute('list_users');
            } else {
                echo "invalid name";
            }
        }

        return $this->render('UserBundle:User:loginForm.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/user/logout", name="logout")
     */
    public function logoutUsersAction(Request $request) {

        $this->get('session')->clear('id');
        $this->get('session')->clear('name');
        return $this->redirect($this->generateUrl('login'));
    }

    /**
     * @Route("/user/create", name="adduser")
     */
    public function createUserAction(Request $request) {

        $user = new User;
        $phone = new Phone;
        $user->addPhone($phone);
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $obj = $this->getDoctrine()->getManager();
            $phone->setUser($user);
            $obj->persist($phone);
            $obj->persist($user);
            $obj->flush();


            return $this->redirectToRoute('list_users');
        }

        return $this->render('UserBundle:User:userForm.html.twig', array(
                    'user_form' => $form->createView(),
        ));
    }

    /**

     * @Route("/user/show" , name="show_user")
     */
    public function showUserAction(Request $request) {

//        print_r( get_class_methods($user));exit;
        $userId = $this->get('session')->get('id');
        $user = $this->getDoctrine()
                ->getRepository('UserBundle:User')
                ->find($userId);

        if (!$user) {
            throw $this->createNotFoundException(
                    'No user  found for id ' . $userId
            );
        }
 
        return $this->render('UserBundle:User:userDetails.html.twig', array(
                    'user' => $user,
               
        ));
    }

    /**

     * @Route("/user/addphone" , name="add_phone")
     */
    public function addPhoneAction(Request $request) {

        $phone = new Phone;
        $userId = $this->get('session')->get('id');
        $user = $this->getDoctrine()
                ->getRepository('UserBundle:User')
                ->find($userId);

        $phone->setUser($user);

        $form = $this->createForm(PhoneType::class, $phone);
        $form->handleRequest($request);

        if ($request->isXmlHttpRequest() && $form->isSubmitted()) {
            $number = $request->request->get('request');
            $phone->setNumber($number);
            $obj = $this->getDoctrine()->getManager();
            $obj->persist($phone);
            $obj->flush();
            return new Response('success');
        }
    
        return $this->render('UserBundle:User:userPhoneForm.html.twig', array(
                    'form' => $form->createView(),
                    
        ));
        //*************************************
    }

}
