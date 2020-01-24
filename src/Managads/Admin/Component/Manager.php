<?php
namespace Managads\Admin\Component;

use Managads;

class Manager
{
    protected static $instance;
    protected $componentHeaders = [
        'Component Name',
        'Component URI',
        'Author',
        'Author URI',
        'Description',
        'Version',
        'Tag',
    ];

    public static function instance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function __construct()
    {
        add_action('admin_menu', array($this, 'registerMenu'));
    }

    public function registerMenu()
    {
        add_submenu_page(
            Managads::NAME,
            __('Components', 'managads'),
            __('Components', 'managads'),
            'manage_options',
            'wp-managads/components',
            array($this, 'view')
        );
    }

    public function view()
    {
        // $view = new View();
        // $view->render();

        $components = [];
        $maybeComponents = glob(MANAGAS_COMPONENT_DIR . '/{*.php,*/*.php}', GLOB_BRACE);
        $componentNameIndex = array_search('Component Name', $this->componentHeaders);
        foreach ($maybeComponents as $maybeComponent) {
            $data = get_file_data($maybeComponent, $this->componentHeaders, 'managads_parse_data');
            if (empty($data[$componentNameIndex])) {
                continue;
            }
            $components[] = $maybeComponent;
        }
        foreach ($components as $index => $component) {
            $components[$index] = str_replace(ABSPATH, '', $component);
        }

        update_option('managads_active_components', $components, true);
    }
}
