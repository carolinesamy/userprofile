<?php

#35967466#

namespace AppBundle\Controller;

use AppBundle\Entity\Product;
use AppBundle\Entity\Category;
use AppBundle\Entity\Employes;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class HomeController extends Controller {

//***************************** change language according to ip address**************
    /**
     * @Route("/ipaddres", name="ipaddres")
     */
    public function indexAction(Request $request) {
//        get ip from reguest 
// $ip = $request->getClientIp();
        $ip = "79.93.164.80"; // until upload website on server

        $country_code = trim(file_get_contents("http://ipinfo.io/{$ip}/country")); //get country code
        if ($country_code == "FR") {
            $this->container->get('translator')->setLocale("fr_FR"); // translate if franch
        }


        return $this->render('default/index.html.twig', array('s' => "Symfony is great")
        );
    }

//***************************  CRUD on Employee *************************************
    /**

     * @Route("/createemp")
     */
    public function createEmp() {
        $emp = new Employes();
        $emp->setName('caroline');
        $emp->sFetPhone(
                '012012569964');
        $obj = $this->getDoctrine()->getManager();
        $obj->persist($emp);
        $obj->flush();
        return new Response('Saved new employe with id ' . $emp->getId());
    }

    /**

     * @Route("/showemp/{empId}")
     */
    public function showAction($empId) {
//        $emp = $this->getDoctrine()
//                ->getRepository('AppBundle:Employes')
//                ->find($empId);
//page 100

        $repository = $this->getDoctrine()->getRepository('AppBundle:Employes');
// $emp1 = $repository->find($empId);  //law ana 3ayz aktr mn p-roduct masln
        $emp2 = $repository->findOneBy(array('id' => $empId));
        if (!$emp2) {
            throw $this->createNotFoundException(
                    'No employe found for id ' . $empId2
            );
        }

        return new Response($emp2->getPhone() . $emp2->getName());
    }

    /**

     * @Route("/updateemp/{empId}")
     */
    public function updateAction($empId) {
        $obj = $this->getDoctrine()->getManager();
        $emp = $obj->getRepository('AppBundle:Employes')->find($empId);

        if (!$emp) {
            throw $this->createNotFoundException(
                    'No employe found for id ' . $empId
            );
        }
// update row
        $emp->setName('magdoline');
        $obj->flush();
        return new Response($emp->getPhone() . $emp->getName());
    }

    /**

     * @Route("/deleteemp/{empId}")
     */
    public function deleteAction($empId) {
        $obj = $this->getDoctrine()->getManager();
        $emp = $obj->getRepository('AppBundle:Employes')->find($empId);

        if (!$emp) {
            throw $this->createNotFoundException(
                    'No employe found for id ' . $empId
            );
        }
        $obj->remove($emp);
        $obj->flush();
    }

//*********************************** CRUD on Product **************************
    /**

     * @Route("/addproduct/{name}/{price}/{catName}")
     */
    public function addProductAction($name, $price, $catName) {

        $category = new Category();
        $category->setName($catName);

        $product = new Product();
        $product->setName($name);
        $product->setPrice($price);

        $product->setCategory($category);

        $product->setDescription("descriotion here");
        $obj = $this->getDoctrine()->getManager();

        $obj->persist($category);
        $obj->persist($product);
        $obj->flush();
        return new Response('Saved new product with id' . $product->getId());
    }

    /**

     * @Route("/showproduct/{productId}")
     */
    public function showProductAction($productId) {

        $product = $this->getDoctrine()
                ->getRepository('AppBundle:Product')
                ->find($productId);
        $categoryName = $product->getCategory()->getName();

        if (!$product) {
            throw $this->createNotFoundException(
                    'No product found for id ' . $product
            );
        }

        return new Response($product->getName() . $product->getPrice() . $categoryName);
    }

    /**

     * @Route("/updateproduct/{productId}")
     */
    public function updateProductAction($productId) {
        $obj = $this->getDoctrine()->getManager();
        $product = $obj->getRepository('AppBundle:Product')->find($productId);

        if (!$product) {
            throw $this->createNotFoundException(
                    'No product found for id ' . $productId
            );
        }
// update row
        $product->setName('meat');
        $obj->flush();
        return new Response($product->getPrice() . $product->getName());
    }

}
