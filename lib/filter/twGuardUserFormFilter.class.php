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
		$this->widgetSchema['sf_guard_user_group_list']->setLabel('Groups');
		$this->widgetSchema['sf_guard_user_permission_list']->setLabel('Permissions');
		$this->getWidget('last_login')
			->setOption('from_date', new sfWidgetFormInput(array(), array('class' => 'input-large j-datetimepicker')))
			->setOption('to_date', new sfWidgetFormInput(array(), array('class' => 'input-large j-datetimepicker')))
			->setOption('template', 'from<br />%from_date%<br />to<br />%to_date%')
			->setOption('filter_template', '%date_range%<br />%empty_checkbox%&nbsp;%empty_label%');
		$this->getValidator('last_login')
			->setOption('from_date', new sfValidatorDateTime(array('required' => false)))
			->setOption('to_date', new sfValidatorDateTime(array('required' => false)));
	}
}
