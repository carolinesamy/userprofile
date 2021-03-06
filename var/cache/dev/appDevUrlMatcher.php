<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/937165f')) {
                // _assetic_937165f
                if ($pathinfo === '/js/937165f.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '937165f',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_937165f',);
                }

                // _assetic_937165f_0
                if ($pathinfo === '/js/937165f_addphoneAction_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '937165f',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_937165f_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/57456fa')) {
                // _assetic_57456fa
                if ($pathinfo === '/js/57456fa.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '57456fa',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_57456fa',);
                }

                if (0 === strpos($pathinfo, '/js/57456fa_part_1_')) {
                    // _assetic_57456fa_0
                    if ($pathinfo === '/js/57456fa_part_1_addphoneAction_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '57456fa',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_57456fa_0',);
                    }

                    // _assetic_57456fa_1
                    if ($pathinfo === '/js/57456fa_part_1_dividecontrolr_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '57456fa',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_57456fa_1',);
                    }

                    // _assetic_57456fa_2
                    if ($pathinfo === '/js/57456fa_part_1_embdedPhoneForm_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '57456fa',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_57456fa_2',);
                    }

                    // _assetic_57456fa_3
                    if ($pathinfo === '/js/57456fa_part_1_selector_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '57456fa',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_57456fa_3',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            // list_users
            if ($pathinfo === '/user') {
                return array (  '_controller' => 'UserBundle\\Controller\\UserController::listUsersAction',  '_route' => 'list_users',);
            }

            if (0 === strpos($pathinfo, '/user/log')) {
                // login
                if ($pathinfo === '/user/login') {
                    return array (  '_controller' => 'UserBundle\\Controller\\UserController::loginUsersAction',  '_route' => 'login',);
                }

                // logout
                if ($pathinfo === '/user/logout') {
                    return array (  '_controller' => 'UserBundle\\Controller\\UserController::logoutUsersAction',  '_route' => 'logout',);
                }

            }

            // adduser
            if ($pathinfo === '/user/create') {
                return array (  '_controller' => 'UserBundle\\Controller\\UserController::createUserAction',  '_route' => 'adduser',);
            }

            // show_user
            if ($pathinfo === '/user/show') {
                return array (  '_controller' => 'UserBundle\\Controller\\UserController::showUserAction',  '_route' => 'show_user',);
            }

            // add_phone
            if ($pathinfo === '/user/addphone') {
                return array (  '_controller' => 'UserBundle\\Controller\\UserController::addPhoneAction',  '_route' => 'add_phone',);
            }

        }

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
