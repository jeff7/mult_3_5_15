<?php

namespace test;

require_once './App/autoload.php';

use App\classes\Mod;
use PHPUnit\Framework\TestCase;

class ModTest extends TestCase
{
    public function testModule()
    {
        $mod = new Mod();

        $this->assertIsNotInt($mod->Module(6, 3, 'Three'));

    }
}
