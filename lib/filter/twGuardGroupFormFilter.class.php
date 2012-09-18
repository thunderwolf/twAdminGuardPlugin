<?php

/**
 * twGuardGroup filter form.
 *
 * @package    twAdminGuardPlugin
 * @subpackage filter
 * @author     Arkadiusz Tułodziecki
 */
class twGuardGroupFormFilter extends sfGuardGroupFormFilter {
	public function configure() {
		unset($this['sf_guard_user_group_list']);
		$this->widgetSchema['sf_guard_group_permission_list']->setLabel('Permissions');
	}
}
