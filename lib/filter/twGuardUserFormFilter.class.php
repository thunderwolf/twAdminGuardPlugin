<?php

/**
 * twGuardUser filter form.
 *
 * @package    twAdminGuardPlugin
 * @subpackage filter
 * @author     Arkadiusz Tułodziecki
 */
class twGuardUserFormFilter extends sfGuardUserFormFilter {
	public function configure() {
		unset($this['algorithm'], $this['salt'], $this['password']);
		
		$this->widgetSchema['username'] = new sfWidgetFormFilterInput(array('with_empty' => false, 'template' => '%input% %empty_checkbox% %empty_label%'));
		
		$this->widgetSchema['sf_guard_user_group_list']->setLabel('Groups');
		$this->widgetSchema['sf_guard_user_permission_list']->setLabel('Permissions');
	}
}
