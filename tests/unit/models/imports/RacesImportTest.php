<?php

require_once __DIR__ . '/../../TestHelper.php';

use Causey\Imports\RacesImport;
use FormulaFantasy\Database\DatabasePlain;
use PHPUnit\Framework\TestCase;

class RacesImportTest extends TestCase
{

    public function testImport()
    {

    }

    /**
     * @test
     */
    public function test__construct()
    {
        $db =  new DatabasePlain();
        $obj = new RacesImport($db);
        $this->assertInstanceOf(RacesImport::class, $obj);
    }
}
