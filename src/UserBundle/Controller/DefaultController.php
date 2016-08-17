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
use UserBundle\Form\loginType;

class UserController extends Controller {
    
    /*
     * @Route("/login", name="login")
     */
    public function loginUsersAction() {

        $form = $this->createForm(LoginType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $user = $this->getDoctrine()
                    ->getRepository('UserBundle:User')
                    ->find($userId);

            return $this->redirectToRoute('list_users');
        }

        return $this->render('UserBundle:User:loginForm.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

}