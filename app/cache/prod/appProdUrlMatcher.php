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

        // admin
        if ($pathinfo === '/admin') {
            return array (  '_controller' => 'AdminBundle\\Controller\\IndexController::indexAction',  '_route' => 'admin',);
        }

        if (0 === strpos($pathinfo, '/msl')) {
            // msl
            if ($pathinfo === '/msl') {
                return array (  '_controller' => 'AdminBundle\\Controller\\MslController::indexAction',  '_route' => 'msl',);
            }

            if (0 === strpos($pathinfo, '/msl_')) {
                // msl_add_edit
                if ($pathinfo === '/msl_add_edit') {
                    return array (  '_controller' => 'AdminBundle\\Controller\\MslController::addEditAction',  '_route' => 'msl_add_edit',);
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

            // therapeutic_area_add_edit
            if ($pathinfo === '/therapeutic_area_add_edit') {
                return array (  '_controller' => 'AdminBundle\\Controller\\TherapeuticAreaController::addEditAction',  '_route' => 'therapeutic_area_add_edit',);
            }

            // therapeutic_area_list
            if ($pathinfo === '/therapeutic_area_list') {
                return array (  '_controller' => 'AdminBundle\\Controller\\TherapeuticAreaController::getListAction',  '_route' => 'therapeutic_area_list',);
            }

        }

        // admin_logout
        if ($pathinfo === '/admin_logout') {
            return array (  '_controller' => 'AdminBundle\\Controller\\IndexController::logoutAction',  '_route' => 'admin_logout',);
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
