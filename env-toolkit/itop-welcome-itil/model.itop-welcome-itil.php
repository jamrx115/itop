						<?php
//
// File generated by ... on the 2017-09-25T10:18:07-0500
// Please do not edit manually
//

/**
 * Classes and menus for itop-welcome-itil (version 2.2.0)
 *
 * @author      iTop compiler
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

//
// Menus
//
class MenuCreation_itop_welcome_itil extends ModuleHandlerAPI
{
	public static function OnMenuCreation()
	{
		global $__comp_menus__; // ensure that the global variable is indeed global !
		$__comp_menus__['WelcomeMenu'] = new MenuGroup('WelcomeMenu', 10);
		$__comp_menus__['WelcomeMenuPage'] = new DashboardMenuNode('WelcomeMenuPage', dirname(__FILE__).'/welcomemenupage_dashboard_menu.xml', $__comp_menus__['WelcomeMenu']->GetIndex(), 10);
		$__comp_menus__['MyShortcuts'] = new ShortcutContainerMenuNode('MyShortcuts', $__comp_menus__['WelcomeMenu']->GetIndex(), 20);
	}
} // class MenuCreation_itop_welcome_itil
