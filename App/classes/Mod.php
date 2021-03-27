<?php

namespace App\classes;

class Mod
{
    public static function module($i, $d, $string)
    {
        if (is_numeric($i) && $i % $d == 0) {
            return $string . ' (' . $i . ')';
        }

        return $i;
    }
}
