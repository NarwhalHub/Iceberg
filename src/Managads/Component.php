<?php
namespace Managads;

class Component
{
    public function loadComponents()
    {
        $activatedComponents = get_option('managads_active_components');
        foreach ($activatedComponents as $activatedComponent) {
            $component = sprintf('%s/%s', ABSPATH, $activatedComponent);
            if (file_exists($component)) {
                require_once $component;
            }
        }
    }
}
