<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'list_users' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\UserController::gitUsersAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/git',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\UserController::loginUsersAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adduser' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\UserController::createUserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'show_user' => array (  0 =>   array (    0 => 'userId',  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\UserController::showUserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'userId',    ),    1 =>     array (      0 => 'text',      1 => '/user/show',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'add_phone' => array (  0 =>   array (    0 => 'userId',  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\UserController::addPhoneAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'userId',    ),    1 =>     array (      0 => 'text',      1 => '/user/add_phone',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ipaddres' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\HomeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ipaddres',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_home_createemp' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\HomeController::createEmp',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/createemp',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_home_show' => array (  0 =>   array (    0 => 'empId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\HomeController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'empId',    ),    1 =>     array (      0 => 'text',      1 => '/showemp',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_home_update' => array (  0 =>   array (    0 => 'empId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\HomeController::updateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'empId',    ),    1 =>     array (      0 => 'text',      1 => '/updateemp',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_home_delete' => array (  0 =>   array (    0 => 'empId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\HomeController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'empId',    ),    1 =>     array (      0 => 'text',      1 => '/deleteemp',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_home_addproduct' => array (  0 =>   array (    0 => 'name',    1 => 'price',    2 => 'catName',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\HomeController::addProductAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'catName',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'price',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    3 =>     array (      0 => 'text',      1 => '/addproduct',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_home_showproduct' => array (  0 =>   array (    0 => 'productId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\HomeController::showProductAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'productId',    ),    1 =>     array (      0 => 'text',      1 => '/showproduct',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_home_updateproduct' => array (  0 =>   array (    0 => 'productId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\HomeController::updateProductAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'productId',    ),    1 =>     array (      0 => 'text',      1 => '/updateproduct',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_lucky_number' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\LuckyController::numberAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/lucky/number',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_lucky_apinumber' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\LuckyController::apiNumberAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/lucky/number',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_lucky_numberactioncount' => array (  0 =>   array (    0 => 'count',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\LuckyController::numberActionCount',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'count',    ),    1 =>     array (      0 => 'text',      1 => '/lucky/number',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_task_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\TaskController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/form',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'task_success' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\TaskController::taskSuccessAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/success',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
