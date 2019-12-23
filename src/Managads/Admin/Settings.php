<?php
namespace Managads\Admin;

class Settings
{
    public function __construct()
    {
        add_action('admin_menu', array($this, 'register_menus'));
    }

    public function register_menus()
    {
        add_submenu_page('wp-managads', 'Managads Settings', 'Settings', 'manage_options', 'wp-managads/settings', array($this, 'render'));
    }

    public function render()
    {
    }
}
