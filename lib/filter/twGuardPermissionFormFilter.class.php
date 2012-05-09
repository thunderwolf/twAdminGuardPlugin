<?php

/**
 * twGuardPermission filter form.
 *
 * @package    twAdminGuardPlugin
 * @subpackage filter
 * @author     Arkadiusz Tułodziecki
 */
class twGuardPermissionFormFilter extends sfGuardPermissionFormFilter {
	public function configure() {
		unset($this['sf_guard_user_permission_list']);
		$this->widgetSchema['sf_guard_group_permission_list']->setLabel('Groups');
		$this->setWidget('description', new sfWidgetFormFilterInput(array('template' => '%input%&nbsp;%empty_checkbox%&nbsp;%empty_label%')));
	}
}
