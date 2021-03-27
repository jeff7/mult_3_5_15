<?php

namespace App\classes;

use App\classes\Mod;

class ModView
{
    public static function index()
    {
        $module = new Mod;

        for ($i = 1; $i <= 100; $i++) {
            echo '<br> ' . $module->module($module->module($module->module($i, 15, 'ThreeAndFive'), 3, 'Three'), 5, 'Five');
        }
    }
}
