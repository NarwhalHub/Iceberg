<?php
namespace Mangads\Shortcodes;

class Managads
{
    public function __construct()
    {
        add_action('init', array($this, 'register_shortcodes'));
    }

    public function register_shortcodes()
    {
        add_shortcode('managads', array($this, 'shortcode'));
    }

    public function shortcode($attrs)
    {
    }
}
