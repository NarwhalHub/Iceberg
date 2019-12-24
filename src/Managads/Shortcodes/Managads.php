<?php
namespace Managads\Shortcodes;

use Managads\Ad;

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
        $attrs = shortcode_atts(array(
            'id' => 0,
        ), $attrs);
        $ad = new Ad($attrs['id']);

        return $ad->getContent();
    }
}
