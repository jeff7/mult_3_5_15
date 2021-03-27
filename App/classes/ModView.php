<?php

namespace App\classes;

use App\classes\Mod;

class ModView
{
    public static function index()
    {
        echo '<h2>Sequence of multiples of 3, 5 and 15</h2><br>';
        $module = new Mod;

        for ($i = 1; $i <= 100; $i++) {
            echo ' ' . $module->module($module->module($module->module($i, 15, 'ThreeAndFive'), 3, 'Three'), 5, 'Five');
        }
    }
}
