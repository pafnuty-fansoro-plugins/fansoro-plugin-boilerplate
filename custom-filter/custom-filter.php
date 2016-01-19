<?php
/**
 * Custom Filter Plugin for Fansoro CMS
 * Based on https://github.com/pafnuty-fansoro-plugins/fansoro-plugin-boilerplate/custom-filter
 *
 * @package    Fansoro
 * @subpackage Plugins
 * @author     John Doe
 * @version    1.0.0
 * @license    MIT
 */


// Usage in page content: [b]bold text here[/b]
Filter::add(
    'content', // Add a function on fitler name `content`
    function ($content) {
        return preg_replace(array('/\[b\](.*?)\[\/b\]/ms'), array('<strong>\1</strong>'), $content);
    }
);
