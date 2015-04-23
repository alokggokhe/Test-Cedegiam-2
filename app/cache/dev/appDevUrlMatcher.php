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

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // _security_login
        if ($pathinfo === '/admin') {
            return array (  '_controller' => 'AdminBundle\\Controller\\IndexController::indexAction',  '_route' => '_security_login',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            // _security_check
            if ($pathinfo === '/login_check') {
                return array('_route' => '_security_check');
            }

            // _security_logout
            if ($pathinfo === '/logout') {
                return array('_route' => '_security_logout');
            }

        }

        if (0 === strpos($pathinfo, '/msl')) {
            // msl
            if ($pathinfo === '/msl') {
                return array (  '_controller' => 'AdminBundle\\Controller\\MslController::indexAction',  '_route' => 'msl',);
            }

            if (0 === strpos($pathinfo, '/msl_')) {
                // msl_add
                if ($pathinfo === '/msl_add') {
                    return array (  '_controller' => 'AdminBundle\\Controller\\MslController::addAction',  '_route' => 'msl_add',);
                }

                // msl_edit
                if ($pathinfo === '/msl_edit') {
                    return array (  '_controller' => 'AdminBundle\\Controller\\MslController::editAction',  '_route' => 'msl_edit',);
                }

                // msl_list
                if ($pathinfo === '/msl_list') {
                    return array (  '_controller' => 'AdminBundle\\Controller\\MslController::getListAction',  '_route' => 'msl_list',);
                }

                // msl_get
                if ($pathinfo === '/msl_get') {
                    return array (  '_controller' => 'AdminBundle\\Controller\\MslController::getMslDetailsAction',  '_route' => 'msl_get',);
                }

                // msl_delete
                if ($pathinfo === '/msl_delete') {
                    return array (  '_controller' => 'AdminBundle\\Controller\\MslController::deleteMslAction',  '_route' => 'msl_delete',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/therapeutic_area_')) {
            // therapeutic_area_user
            if ($pathinfo === '/therapeutic_area_user') {
                return array (  '_controller' => 'AdminBundle\\Controller\\TherapeuticAreaController::indexAction',  '_route' => 'therapeutic_area_user',);
            }

            // therapeutic_area_add
            if ($pathinfo === '/therapeutic_area_add') {
                return array (  '_controller' => 'AdminBundle\\Controller\\TherapeuticAreaController::addAction',  '_route' => 'therapeutic_area_add',);
            }

            // therapeutic_area_edit
            if ($pathinfo === '/therapeutic_area_edit') {
                return array (  '_controller' => 'AdminBundle\\Controller\\TherapeuticAreaController::editAction',  '_route' => 'therapeutic_area_edit',);
            }

            // therapeutic_area_list
            if ($pathinfo === '/therapeutic_area_list') {
                return array (  '_controller' => 'AdminBundle\\Controller\\TherapeuticAreaController::getListAction',  '_route' => 'therapeutic_area_list',);
            }

        }

        // index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'index');
            }

            return array (  '_controller' => 'MainBundle\\Controller\\HomeController::indexAction',  '_route' => 'index',);
        }

        // homepage
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'MainBundle\\Controller\\HomeController::indexAction',  '_route' => 'homepage',);
        }

        // confirm
        if ($pathinfo === '/confirm') {
            return array (  '_controller' => 'MainBundle\\Controller\\ConfirmController::indexAction',  '_route' => 'confirm',);
        }

        // option
        if ($pathinfo === '/option') {
            return array (  '_controller' => 'MainBundle\\Controller\\OptionController::indexAction',  '_route' => 'option',);
        }

        // invitation
        if ($pathinfo === '/invitation') {
            return array (  '_controller' => 'MainBundle\\Controller\\InvitationController::indexAction',  '_route' => 'invitation',);
        }

        // privacy_policy
        if ($pathinfo === '/privacy_policy') {
            return array (  '_controller' => 'MainBundle\\Controller\\PrivacyPolicyController::indexAction',  '_route' => 'privacy_policy',);
        }

        // terms_of_use
        if ($pathinfo === '/terms_of_use') {
            return array (  '_controller' => 'MainBundle\\Controller\\TermsOfUseController::indexAction',  '_route' => 'terms_of_use',);
        }

        // forgotten_password
        if ($pathinfo === '/forgotten_password') {
            return array (  '_controller' => 'MainBundle\\Controller\\ForgottenPasswordController::indexAction',  '_route' => 'forgotten_password',);
        }

        // login
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'login');
            }

            return array('_route' => 'login');
        }

        if (0 === strpos($pathinfo, '/log')) {
            // login_check
            if ($pathinfo === '/login_check') {
                return array('_route' => 'login_check');
            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
