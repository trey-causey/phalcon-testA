<?php
declare(strict_types=1);

namespace FormulaFantasy\Tests\Unit;

include __DIR__ . '/../../../../common/setup/configurationTests.php';

use FormulaFantasy\Database\DatabasePhalcon;
use PHPUnit\Framework\TestCase;

class DatabasePhalconTest extends TestCase
{
    public function test__construct()
    {
        $pDb = new DatabasePhalcon();

    }
}
