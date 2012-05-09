<?php

/**
 * twAdminGuardPlugin configuration.
 *
 * @package     twAdminGuardPlugin
 * @subpackage  config
 * @author      Arkadiusz Tułodziecki
 */
class twAdminGuardPluginConfiguration extends sfPluginConfiguration {
	const VERSION = '1.0.0-DEV';
	
	/**
	 *
	 * @see sfPluginConfiguration
	 */
	public function initialize() {
		if (in_array('twAdmin', sfConfig::get('sf_enabled_modules', array()))) {
			sfConfig::set('sf_enabled_modules', array_merge((array) sfConfig::get('sf_enabled_modules'), array('twGuardAuth', 'twGuardUser', 'twGuardGroup', 'twGuardPermission')));
			
			foreach (array('twGuardUser', 'twGuardGroup', 'twGuardPermission') as $module) {
				$this->dispatcher->connect('routing.load_configuration', array('twAdminGuardRouting', 'addRouteForAdmin' . str_replace('twGuard', '', $module)));
			}
		}
		
		if (sfConfig::get('app_tw_admin_guard_plugin_routes_register', true) && in_array('twGuardAuth', sfConfig::get('sf_enabled_modules', array()))) {
			$this->dispatcher->connect('routing.load_configuration', array('twAdminGuardRouting', 'listenToRoutingLoadConfigurationEvent'));
		}
	}
}
