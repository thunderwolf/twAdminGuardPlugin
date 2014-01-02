<?php
require_once dirname(__FILE__) . '/../lib/BasetwGuardGroupActions.class.php';

/**
 * twGuardGroup actions.
 *
 * @package    twAdminGuardPlugin
 * @subpackage twGuardGroup
 * @author     Arkadiusz Tułodziecki
 */
class twGuardGroupActions extends BasetwGuardGroupActions
{
    public function preExecute()
    {
        sfConfig::set('tw_admin:default:module', 'usersadmin');
        sfConfig::set('tw_admin:default:category', 'groups');
        return parent::preExecute();
    }
}
