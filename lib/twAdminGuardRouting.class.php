<?php

/**
 * twAdminPlugin routing.
 *
 * @package     twAdminPlugin
 * @subpackage  routing
 * @author      Arkadiusz Tułodziecki
 */
class twAdminGuardRouting
{
    /**
     * Listens to the routing.load_configuration event.
     *
     * @param sfEvent An sfEvent instance
     */
    static public function listenToRoutingLoadConfigurationEvent(sfEvent $event)
    {
        $r = $event->getSubject();

        // preprend our routes
        $r->prependRoute('tw_guard_signin', new sfRoute('/login', array(
            'module' => 'twGuardAuth', 'action' => 'signin'
        )));
        $r->prependRoute('tw_guard_signout', new sfRoute('/logout', array(
            'module' => 'twGuardAuth', 'action' => 'signout'
        )));
        $r->prependRoute('tw_guard_password', new sfRoute('/request_password', array(
            'module' => 'twGuardAuth', 'action' => 'password'
        )));
    }

    static public function addRouteForAdminUser(sfEvent $event)
    {
        $event->getSubject()
            ->prependRoute('tw_guard_user',
                new sfPropelRouteCollection(
                    array(
                        'name' => 'tw_guard_user', 'model' => 'sfGuardUser', 'module' => 'twGuardUser', 'prefix_path' => 'tw_guard_user',
                        'with_wildcard_routes' => true, 'requirements' => array()
                    )));
    }

    static public function addRouteForAdminGroup(sfEvent $event)
    {
        $event->getSubject()
            ->prependRoute('tw_guard_group',
                new sfPropelRouteCollection(
                    array(
                        'name' => 'tw_guard_group', 'model' => 'sfGuardGroup', 'module' => 'twGuardGroup', 'prefix_path' => 'tw_guard_group',
                        'with_wildcard_routes' => true, 'requirements' => array()
                    )));
    }

    static public function addRouteForAdminPermission(sfEvent $event)
    {
        $event->getSubject()
            ->prependRoute('tw_guard_permission',
                new sfPropelRouteCollection(
                    array(
                        'name' => 'tw_guard_permission', 'model' => 'sfGuardPermission', 'module' => 'twGuardPermission',
                        'prefix_path' => 'tw_guard_permission', 'with_wildcard_routes' => true, 'requirements' => array()
                    )));
    }
}
