<?php
namespace Managads\Admin;

use Managads\Admin\Component\Manager;

class Admin
{
    public function __construct()
    {
        $this->initialize();
    }

    public function initialize()
    {
        new Menus();
        new Settings();

        Manager::instance();
    }
}
