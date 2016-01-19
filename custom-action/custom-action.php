<?php
/**
 * Custom Action Plugin for Fansoro CMS
 * Based on https://github.com/pafnuty-fansoro-plugins/fansoro-plugin-boilerplate/custom-action
 *
 * @package    Fansoro
 * @subpackage Plugins
 * @author     John Doe
 * @version    1.0.0
 * @license    MIT
 */

// Use in template: 
// {Action::run('custom-action')}

Action::add(
	'custom-action', // Action name
	function () {
		// Get config of custom-action
		$config = Config::get('plugins.custom-action');

		// Print the custom-action config
		echo "<pre>";
		print_r($config);
		echo "</pre>";

	}
);