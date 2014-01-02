<?php
require_once dirname(__FILE__) . '/../lib/BasetwGuardUserActions.class.php';

/**
 * twGuardUser actions.
 *
 * @package    twAdminGuardPlugin
 * @subpackage twGuardUser
 * @author     Arkadiusz Tułodziecki
 */
class twGuardUserActions extends BasetwGuardUserActions
{
    public function preExecute()
    {
        sfConfig::set('tw_admin:default:module', 'usersadmin');
        sfConfig::set('tw_admin:default:category', 'users');
        return parent::preExecute();
    }
}
