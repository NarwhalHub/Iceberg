<?php
namespace Managads\Admin;

use Managads;
use Managads\Admin\Ads\Editor as AdsEditor;
use Managads\Admin\Component\Manager as ComponentManager;
use Managads\Admin\Lists\Ads as AdsList;

class Menus
{
    public function __construct()
    {
        add_action('admin_menu', array($this, 'registerMenus'));
    }


    public function registerMenus()
    {
        add_menu_page(
            __('WP Managads', 'managads'),
            __('Managads', 'managads'),
            'manage_options',
            Managads::NAME,
            array($this, 'adminMenus'),
            null,
            80
        );

        add_submenu_page(
            Managads::NAME,
            __('Add New Ad', 'managads'),
            __('Add New', 'managads'),
            'manage_options',
            'wp-managads&action=new',
            array($this, 'add_new_ad')
        );
    }

    public function adminMenus()
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
