<?php namespace FormulaFantasy\Results;

require_once __DIR__ . '/../../../../TestHelper.php';

use FormulaFantasy\Database\DatabasePlain;
use FormulaFantasy\Results\QualifyingResultsDriver;
use PHPUnit\Framework\TestCase;

class QualifyingResultsDriverTest extends TestCase
{
    /**
     * @test
     */
    public function TestGetQualifyingResultLineByDriver_WithDriver_ReturnArray()
    {
        $qrdObj = new QualifyingResultsDriver(new DatabasePlain(), 822, 1031);
        $results = $qrdObj->getQualifyingResultLineByDriver();
        var_dump($results);
        $this->assertIsArray($results);

    }
}
