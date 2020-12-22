<?php

use FormulaFantasy\Results\QualifyingResults;
use PHPUnit\Framework\TestCase;

class QualifyingResultsTest extends TestCase
{

    public function test__construct()
    {
        $this->assertInstanceOf(QualifyingResults::class, new QualifyingResults(new \FormulaFantasy\Database\DatabasePlain(), 1031));
    }

    public function testGetData()
    {

    }
}
