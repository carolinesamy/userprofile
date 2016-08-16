<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use UserBundle\Entity\User;
use UserBundle\Entity\Phone;
use UserBundle\Form\UserType;
use UserBundle\Form\PhoneType;

class UserController extends Controller {

    /**
     * @Route("/", name="list_users")
     */
    public function listUsersAction() {
        $users = $this->getDoctrine()
                ->getRepository('UserBundle:User')
                ->findAll();

        if (!$users) {
            throw $this->createNotFoundException(
                    'No users found'
            );
        }
        return $this->render('UserBundle:User:listUsers.html.twig', array('users' => $users));
    }

    /**
     * @Route("/user/create", name="adduser")
     */
    public function createUserAction(Request $request) {

        $user = new User;
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $obj = $this->getDoctrine()->getManager();
            $obj->persist($user);
            $obj->flush();
            return $this->redirectToRoute('list_users');
        }

        return $this->render('UserBundle:User:userForm.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

    /**

     * @Route("/user/show/{userId}" , name="show_user")
     */
    public function showUserAction($userId) {

        $user = $this->getDoctrine()
                ->getRepository('UserBundle:User')
                ->find($userId);

//        print_r( get_class_methods($user));exit;
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

     * @Route("/user/add_phone/{userId}" , name="add_phone")
     */
    public function addPhoneAction(Request $request) {

        $phone = new Phone;
        $userId = $request->get('userId');

        $user = $this->getDoctrine()
                ->getRepository('UserBundle:User')
                ->find($userId);

        $phone->setUser($user);

        $form = $this->createForm(PhoneType::class, $phone);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $obj = $this->getDoctrine()->getManager();
            $obj->persist($phone);
            $obj->flush();
            //redirect to show user details to display new phone
            return $this->redirectToRoute('show_user', array('userId' => $userId));
        }
        return $this->render('UserBundle:User:userPhoneForm.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

}
