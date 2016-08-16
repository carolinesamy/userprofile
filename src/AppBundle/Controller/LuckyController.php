<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
// --> don't forget this new use statement
use Symfony\Component\HttpFoundation\JsonResponse;
// --> add this new use statement with extend

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class LuckyController extends Controller
{
    //print one random number 
/**
* @Route("/lucky/number")
*/  
  public function numberAction()
    {
        $random= rand(0,100);
        return new Response(
                '<html><body>lucky number : '.$random.'</body></html>');
    }
        //print one random number as json object
    /**

     * @Route("/api/lucky/number")
     */
    public function apiNumberAction()
    {
        $data=array ('lucky_number'=>rand(0,100),
            );
//        **************** if use regular response ************
        
//        return new Response(
//                json_encode($data),
//                200
////                array('Content-Type'=>'application/json')  // eh lazmtha ??
//                );
        
//        ***************** if use JsonResponse *************
        return new JsonResponse($data);
    }
    
//    take how many number user need and loop it 
    /**
     * @Route("/lucky/number/{count}")     
     */
    public function numberActionCount($count)
    {
        $numbers=array();
        for ($i=0 ;$i<$count;$i++)
        {
            $numbers[]=rand(0,100);
            $numberlist= implode(',', $numbers);
        }
//        return new Response(
//                '<html><body>lucky number : '.$numberlist.'</body></html>');
        // render(): a shortcut that does the same as above
        return $this
                ->render('lucky/number.html.twig',
        array('luckyNumberList'=> $numberlist)
                        );
         
    }
}
