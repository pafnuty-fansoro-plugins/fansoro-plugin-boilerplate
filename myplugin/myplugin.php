<?php
/**
 * My Plugin for Morfy CMS
 * Based on https://github.com/pafnuty-morfy-plugins/morfy-plugin-boilerplate
 *
 * @package    Morfy
 * @subpackage Plugins
 * @author     John Doe
 * @version    1.0.0
 * @license    MIT
 */

// Use in template: 
// {Action::run('my_action')}

Action::add(
	'my_action', // Action name
	function () {
		// Get config of myplugin
		$config = Config::get('plugins.myplugin');

		// Print the myplugin config
		echo "<pre>";
		print_r($config);
		echo "</pre>";

	}
);