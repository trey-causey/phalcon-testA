<?php
declare(strict_types=1);

//namespace FormulaFantasy\Tests\Unit\Models\Database;

require_once __DIR__ . '/../../../../vendor/autoload.php';

use FormulaFantasy\Database\DatabasePhalcon;
use PHPUnit\Framework\TestCase;

class DatabasePhalconTest extends TestCase
{
    public function test__construct()
    {
        $pDb = new DatabasePhalcon();

    }
}
