<?php
use Managads\Admin\Admin as ManagadsAdmin;
use Managads\Installer as ManagadsInstaller;
use Managads\Shortcodes\Managads as ManagadsShortCodes;

class Managads
{
    protected static $instance;
    public $admin;

    public static function instance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function __construct()
    {
        $this->defineConstants();
        $this->includes();
        $this->initHooks();
    }

    protected function is_request($type)
    {
        switch ($type) {
            case 'admin':
                return is_admin();
            case 'ajax':
                return defined('DOING_AJAX');
            case 'cron':
                return defined('DOING_CRON');
            case 'frontend':
                return ( ! is_admin() || defined('DOING_AJAX') ) && ! defined('DOING_CRON') && !defined('REST_REQUEST');
        }
    }

    public function defineConstants()
    {
    }

    public function includes()
    {
        $GLOBALS['managads_query'] = new Query();
        if ($this->is_request('admin')) {
            $this->admin = new ManagadsAdmin();
        }

        /**
         * Register Shortcodes
         */
        new ManagadsShortCodes();
    }

    public function initHooks()
    {
        register_activation_hook(WP_MANAGADS_PLUGIN_FILE, array(ManagadsInstaller::class, 'install'));
    }
}
