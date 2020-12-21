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
        $qrdObj = new QualifyingResultsDriver(new DatabasePlain(), 1031);
        $results = $qrdObj->getQualifyingResultLineByDriver(822);
        var_dump($results);
        $this->assertIsArray($results);
    }

    /**
     * @test
     * @dataProvider RoundProvider
     */
    public function TestGetBestQualifyRound_WithDriverId_ReturnOneThroughThree($data, $expected)
    {
        $qrdObj = new QualifyingResultsDriver(new DatabasePlain(), 1031);
        $results = $qrdObj->getQualifyingResultLineByDriver($data);
        $bestRound = $qrdObj->getBestQualifyRound($results[0]);
        $this->assertEquals($expected, $bestRound);
    }

    public function RoundProvider()
    {
        return [
            [830,3],
            [20,2],
            [847,1]
        ];
    }
}
