<?php
namespace Managads\Admin;

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
    }
}
