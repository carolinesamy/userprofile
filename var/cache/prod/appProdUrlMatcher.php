<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // ipaddres
        if ($pathinfo === '/ipaddres') {
            return array (  '_controller' => 'AppBundle\\Controller\\HomeController::indexAction',  '_route' => 'ipaddres',);
        }

        // app_home_createemp
        if ($pathinfo === '/createemp') {
            return array (  '_controller' => 'AppBundle\\Controller\\HomeController::createEmp',  '_route' => 'app_home_createemp',);
        }

        // app_home_show
        if (0 === strpos($pathinfo, '/showemp') && preg_match('#^/showemp/(?P<empId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_home_show')), array (  '_controller' => 'AppBundle\\Controller\\HomeController::showAction',));
        }

        // app_home_update
        if (0 === strpos($pathinfo, '/updateemp') && preg_match('#^/updateemp/(?P<empId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_home_update')), array (  '_controller' => 'AppBundle\\Controller\\HomeController::updateAction',));
        }

        // app_home_delete
        if (0 === strpos($pathinfo, '/deleteemp') && preg_match('#^/deleteemp/(?P<empId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_home_delete')), array (  '_controller' => 'AppBundle\\Controller\\HomeController::deleteAction',));
        }

        // app_home_addproduct
        if (0 === strpos($pathinfo, '/addproduct') && preg_match('#^/addproduct/(?P<name>[^/]++)/(?P<price>[^/]++)/(?P<catName>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_home_addproduct')), array (  '_controller' => 'AppBundle\\Controller\\HomeController::addProductAction',));
        }

        // app_home_showproduct
        if (0 === strpos($pathinfo, '/showproduct') && preg_match('#^/showproduct/(?P<productId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_home_showproduct')), array (  '_controller' => 'AppBundle\\Controller\\HomeController::showProductAction',));
        }

        // app_home_updateproduct
        if (0 === strpos($pathinfo, '/updateproduct') && preg_match('#^/updateproduct/(?P<productId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_home_updateproduct')), array (  '_controller' => 'AppBundle\\Controller\\HomeController::updateProductAction',));
        }

        // app_lucky_number
        if ($pathinfo === '/lucky/number') {
            return array (  '_controller' => 'AppBundle\\Controller\\LuckyController::numberAction',  '_route' => 'app_lucky_number',);
        }

        // app_lucky_apinumber
        if ($pathinfo === '/api/lucky/number') {
            return array (  '_controller' => 'AppBundle\\Controller\\LuckyController::apiNumberAction',  '_route' => 'app_lucky_apinumber',);
        }

        // app_lucky_numberactioncount
        if (0 === strpos($pathinfo, '/lucky/number') && preg_match('#^/lucky/number/(?P<count>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_lucky_numberactioncount')), array (  '_controller' => 'AppBundle\\Controller\\LuckyController::numberActionCount',));
        }

        // app_task_new
        if ($pathinfo === '/form') {
            return array (  '_controller' => 'AppBundle\\Controller\\TaskController::newAction',  '_route' => 'app_task_new',);
        }

        // task_success
        if ($pathinfo === '/success') {
            return array (  '_controller' => 'AppBundle\\Controller\\TaskController::taskSuccessAction',  '_route' => 'task_success',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
