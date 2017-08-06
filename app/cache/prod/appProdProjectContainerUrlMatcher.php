<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // core_core_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'core_core_default_index')), array (  '_controller' => 'Core\\CoreBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/comm')) {
                // os_communications_default_index
                if (0 === strpos($pathinfo, '/comm/hello') && preg_match('#^/comm/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'os_communications_default_index')), array (  '_controller' => 'OS\\CommunicationsBundle\\Controller\\DefaultController::indexAction',));
                }

                // os_communications_default_launch
                if ($pathinfo === '/comm/launch') {
                    return array (  '_controller' => 'OS\\CommunicationsBundle\\Controller\\DefaultController::launchAction',  '_route' => 'os_communications_default_launch',);
                }

            }

            if (0 === strpos($pathinfo, '/chars')) {
                // chars
                if (rtrim($pathinfo, '/') === '/chars') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_chars;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'chars');
                    }

                    return array (  '_controller' => 'OS\\GameBundle\\Controller\\CharsController::indexAction',  '_route' => 'chars',);
                }
                not_chars:

                // chars_create
                if ($pathinfo === '/chars/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_chars_create;
                    }

                    return array (  '_controller' => 'OS\\GameBundle\\Controller\\CharsController::createAction',  '_route' => 'chars_create',);
                }
                not_chars_create:

                // chars_new
                if ($pathinfo === '/chars/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_chars_new;
                    }

                    return array (  '_controller' => 'OS\\GameBundle\\Controller\\CharsController::newAction',  '_route' => 'chars_new',);
                }
                not_chars_new:

                // chars_show
                if (preg_match('#^/chars/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_chars_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chars_show')), array (  '_controller' => 'OS\\GameBundle\\Controller\\CharsController::showAction',));
                }
                not_chars_show:

                // chars_edit
                if (preg_match('#^/chars/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_chars_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chars_edit')), array (  '_controller' => 'OS\\GameBundle\\Controller\\CharsController::editAction',));
                }
                not_chars_edit:

                // chars_update
                if (preg_match('#^/chars/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_chars_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chars_update')), array (  '_controller' => 'OS\\GameBundle\\Controller\\CharsController::updateAction',));
                }
                not_chars_update:

                // chars_delete
                if (preg_match('#^/chars/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_chars_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chars_delete')), array (  '_controller' => 'OS\\GameBundle\\Controller\\CharsController::deleteAction',));
                }
                not_chars_delete:

            }

        }

        // os_game_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'os_game_default_index');
            }

            return array (  '_controller' => 'OS\\GameBundle\\Controller\\DefaultController::indexAction',  '_route' => 'os_game_default_index',);
        }

        // chars_choose_char
        if ($pathinfo === '/choosechar') {
            return array (  '_controller' => 'OS\\GameBundle\\Controller\\DefaultController::listUserCharsAction',  '_route' => 'chars_choose_char',);
        }

        // select_char
        if (0 === strpos($pathinfo, '/selectchar') && preg_match('#^/selectchar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'select_char')), array (  '_controller' => 'OS\\GameBundle\\Controller\\DefaultController::selectCharAction',));
        }

        if (0 === strpos($pathinfo, '/m')) {
            if (0 === strpos($pathinfo, '/map')) {
                // map
                if (rtrim($pathinfo, '/') === '/map') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_map;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'map');
                    }

                    return array (  '_controller' => 'OS\\GameBundle\\Controller\\MapController::indexAction',  '_route' => 'map',);
                }
                not_map:

                // map_create
                if ($pathinfo === '/map/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_map_create;
                    }

                    return array (  '_controller' => 'OS\\GameBundle\\Controller\\MapController::createAction',  '_route' => 'map_create',);
                }
                not_map_create:

                // map_new
                if ($pathinfo === '/map/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_map_new;
                    }

                    return array (  '_controller' => 'OS\\GameBundle\\Controller\\MapController::newAction',  '_route' => 'map_new',);
                }
                not_map_new:

                // map_show
                if (preg_match('#^/map/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_map_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'map_show')), array (  '_controller' => 'OS\\GameBundle\\Controller\\MapController::showAction',));
                }
                not_map_show:

                // map_edit
                if (preg_match('#^/map/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_map_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'map_edit')), array (  '_controller' => 'OS\\GameBundle\\Controller\\MapController::editAction',));
                }
                not_map_edit:

                // map_update
                if (preg_match('#^/map/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_map_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'map_update')), array (  '_controller' => 'OS\\GameBundle\\Controller\\MapController::updateAction',));
                }
                not_map_update:

                // map_delete
                if (preg_match('#^/map/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_map_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'map_delete')), array (  '_controller' => 'OS\\GameBundle\\Controller\\MapController::deleteAction',));
                }
                not_map_delete:

            }

            if (0 === strpos($pathinfo, '/monster')) {
                // monster
                if (rtrim($pathinfo, '/') === '/monster') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_monster;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'monster');
                    }

                    return array (  '_controller' => 'OS\\GameBundle\\Controller\\MonsterController::indexAction',  '_route' => 'monster',);
                }
                not_monster:

                // monster_create
                if ($pathinfo === '/monster/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_monster_create;
                    }

                    return array (  '_controller' => 'OS\\GameBundle\\Controller\\MonsterController::createAction',  '_route' => 'monster_create',);
                }
                not_monster_create:

                // monster_new
                if ($pathinfo === '/monster/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_monster_new;
                    }

                    return array (  '_controller' => 'OS\\GameBundle\\Controller\\MonsterController::newAction',  '_route' => 'monster_new',);
                }
                not_monster_new:

                // monster_show
                if (preg_match('#^/monster/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_monster_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'monster_show')), array (  '_controller' => 'OS\\GameBundle\\Controller\\MonsterController::showAction',));
                }
                not_monster_show:

                // monster_edit
                if (preg_match('#^/monster/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_monster_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'monster_edit')), array (  '_controller' => 'OS\\GameBundle\\Controller\\MonsterController::editAction',));
                }
                not_monster_edit:

                // monster_update
                if (preg_match('#^/monster/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_monster_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'monster_update')), array (  '_controller' => 'OS\\GameBundle\\Controller\\MonsterController::updateAction',));
                }
                not_monster_update:

                // monster_delete
                if (preg_match('#^/monster/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_monster_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'monster_delete')), array (  '_controller' => 'OS\\GameBundle\\Controller\\MonsterController::deleteAction',));
                }
                not_monster_delete:

            }

        }

        if (0 === strpos($pathinfo, '/position')) {
            // position
            if (rtrim($pathinfo, '/') === '/position') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_position;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'position');
                }

                return array (  '_controller' => 'OS\\GameBundle\\Controller\\PositionController::indexAction',  '_route' => 'position',);
            }
            not_position:

            // position_create
            if ($pathinfo === '/position/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_position_create;
                }

                return array (  '_controller' => 'OS\\GameBundle\\Controller\\PositionController::createAction',  '_route' => 'position_create',);
            }
            not_position_create:

            // position_new
            if ($pathinfo === '/position/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_position_new;
                }

                return array (  '_controller' => 'OS\\GameBundle\\Controller\\PositionController::newAction',  '_route' => 'position_new',);
            }
            not_position_new:

            // position_show
            if (preg_match('#^/position/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_position_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'position_show')), array (  '_controller' => 'OS\\GameBundle\\Controller\\PositionController::showAction',));
            }
            not_position_show:

            // position_edit
            if (preg_match('#^/position/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_position_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'position_edit')), array (  '_controller' => 'OS\\GameBundle\\Controller\\PositionController::editAction',));
            }
            not_position_edit:

            // position_update
            if (preg_match('#^/position/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_position_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'position_update')), array (  '_controller' => 'OS\\GameBundle\\Controller\\PositionController::updateAction',));
            }
            not_position_update:

            // position_delete
            if (preg_match('#^/position/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_position_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'position_delete')), array (  '_controller' => 'OS\\GameBundle\\Controller\\PositionController::deleteAction',));
            }
            not_position_delete:

        }

        // os_user_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'os_user_default_index')), array (  '_controller' => 'OS\\UserBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/user')) {
            // user
            if (rtrim($pathinfo, '/') === '/user') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user');
                }

                return array (  '_controller' => 'OS\\UserBundle\\Controller\\UserController::indexAction',  '_route' => 'user',);
            }
            not_user:

            // user_create
            if ($pathinfo === '/user/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_user_create;
                }

                return array (  '_controller' => 'OS\\UserBundle\\Controller\\UserController::createAction',  '_route' => 'user_create',);
            }
            not_user_create:

            // user_new
            if ($pathinfo === '/user/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_new;
                }

                return array (  '_controller' => 'OS\\UserBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
            }
            not_user_new:

            // user_show
            if (preg_match('#^/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'OS\\UserBundle\\Controller\\UserController::showAction',));
            }
            not_user_show:

            // user_edit
            if (preg_match('#^/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'OS\\UserBundle\\Controller\\UserController::editAction',));
            }
            not_user_edit:

            // user_update
            if (preg_match('#^/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_user_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_update')), array (  '_controller' => 'OS\\UserBundle\\Controller\\UserController::updateAction',));
            }
            not_user_update:

            // user_delete
            if (preg_match('#^/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'OS\\UserBundle\\Controller\\UserController::deleteAction',));
            }
            not_user_delete:

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // os_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_os_homepage;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'os_homepage');
            }

            return array (  '_controller' => 'OS\\GameBundle\\Controller\\DefaultController::indexAction',  '_route' => 'os_homepage',);
        }
        not_os_homepage:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
