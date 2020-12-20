<?php

require_once __DIR__ . '/../../../TestHelper.php';

use FormulaFantasy\Results\RaceResults;
use FormulaFantasy\Database\DatabasePlain;
use PHPUnit\Framework\TestCase;

class RaceResultsTest extends TestCase
{

    public function test__construct()
    {
        $this->assertInstanceOf(RaceResults::class, new RaceResults(new \FormulaFantasy\Database\DatabasePlain(), 1031));
    }

    public function testGetData()
    {
        $db = new DatabasePlain();
        $rrObj = new RaceResults($db, 1031);
        $data = $rrObj->getData();
        var_dump($data[0]);
        $this->assertIsArray($data[0]);
    }
}
