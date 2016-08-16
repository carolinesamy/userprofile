<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Task;
use AppBundle\Form\TaskType;

class TaskController extends Controller {

    /**
     * @Route("/form")
     */
    public function newAction(Request $request) {
// create a task and give it some dummy data for this example
        $task = new Task();
        /*         * *********************** if you set data static **********************
          $task->setTask('Write a blog post');
          $task->setDueDate(new \DateTime('tomorrow'));
         * ********************************************************************** */

        /*         * ********** if u assignd form to spesific group ex:"registration"*********
          and create it in controller
          $form = $this->createFormBuilder($task ,array('validation_groups' => array('registration'),))
          $form = $this->createFormBuilder($task)
          ->setAction($this->generateUrl('target_route'))
          ->setMethod('GET')
          ->add('task', TextType::class)
          ->add('dueDate', DateType::class)
          ->add('save', SubmitType::class, array('label' => 'Create Task'))
          ->getForm();
         * ******************************************************************************* */

//        **************** cteate from form class ********************* 
        $form = $this->createForm(TaskType::class, $task, array(
            'validation_groups' => array('edit')
                /* ,'action' => 'task_success2' */                )  // if u want put action here 
        );

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
// ... perform some action, such as saving the task to the database

            $obj = $this->getDoctrine()->getManager();
            $obj->persist($task);
            $obj->flush();
            return $this->redirectToRoute('task_success');
        }

        return $this->render('default/new.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

    //****************** action after submit form **********************

    /**
     * @Route("/success" , name="task_success")
     */
    public function taskSuccessAction() {

        return new Response("succsess");
    }

}
