<?php

namespace unit\models\database;

use Models\database\DatabasePhalcon;
use PHPUnit\Framework\TestCase;

class DatabasePhalconTest extends TestCase
{

    public function test__construct()
    {
        $pDb = new DatabasePhalcon();

    }
}
