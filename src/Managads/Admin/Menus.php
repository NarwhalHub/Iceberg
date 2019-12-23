<?php
namespace Managads\Admin;

use Managads\Admin\Lists\Ads as AdsList;
use Managads\Admin\Ads\Editor as AdsEditor;

class Menus
{
    public function __construct()
    {
        add_action('admin_menu', array($this, 'register_menus'));
    }


    public function register_menus()
    {
        add_menu_page(
            __('WP Managads', 'managads'),
            __('Managads', 'managads'),
            'manage_options',
            'wp-managads',
            array($this, 'render_admin_menu'),
            null,
            80
        );

        add_submenu_page(
            'wp-managads',
            __('Add New Ad', 'managads'),
            __('Add New', 'managads'),
            'manage_options',
            'wp-managads&action=new',
            array($this, 'add_new_ad')
        );
    }

    public function render_admin_menu()
    {
        $add_new_url = admin_url('admin.php?page=wp-managads&action=new');
        if (!isset($_GET['action']) || $_GET['action'] !== 'new') {
            $lstAds = new AdsList();

            echo '<div class="wrap"><h2>My List Table Test<a href="' . $add_new_url . '" class="page-title-action">Add new</a></h2>';
            $lstAds->prepare_items();
            $lstAds->display();
            echo '</div>';
        } else {
            $editor = new AdsEditor();
            $editor->render();
        }
    }
}
