<?php namespace FormulaFantasy\Tests\Unit;

include __DIR__ . '/../../../../common/setup/configurationTests.php';
require_once MODEL_DIR . '/database/DatabasePlain.php';

use FormulaFantasy\Database\DatabasePlain;
use PHPUnit\Framework\TestCase;

class DatabasePlainTest extends TestCase
{

    public function testQuery()
    {

    }

    public function test__construct()
    {
        $this->assertInstanceOf(DatabasePlain::class, new DatabasePlain());
    }

    public function testFetchAll()
    {

    }
}
