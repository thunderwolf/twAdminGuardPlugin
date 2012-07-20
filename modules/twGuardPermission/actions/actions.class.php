<?php
require_once dirname(__FILE__) . '/../lib/BasetwGuardPermissionActions.class.php';

/**
 * twGuardPermission actions.
 *
 * @package    twAdminGuardPlugin
 * @subpackage twGuardPermission
 * @author     Arkadiusz Tułodziecki
 */
class twGuardPermissionActions extends BasetwGuardPermissionActions {
	public function preExecute() {
		sfConfig::set('tw_admin:default:module', 'usersadmin');
		sfConfig::set('tw_admin:default:category', 'permissions');
		return parent::preExecute();
	}
}
