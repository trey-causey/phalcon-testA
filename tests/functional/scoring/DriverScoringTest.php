<?php

require_once __DIR__ . '/../../unit/TestHelper.php';

use FormulaFantasy\Results\RaceResultsDriver;
use FormulaFantasy\Results\QualifyingResultsDriver;
use FormulaFantasy\Database\DatabasePlain;
use FormulaFantasy\Score\Score;
use PHPUnit\Framework\TestCase;

class DriverScoringTest extends TestCase
{
    /**
     * @test
     * @dataProvider austriaOneProvider
     */
    public function TestGetDriverScoreWithCommand_WithVetSaiKvy_ReturnTotalPoints()
    {
        $driverId = 822;
        $raceId = 1031;
        //get points for Race
        //get points for qualifying

        $this->assertEquals(45, 45);
    }

    /**
     * @test
     * @dataProvider placeholderDataProvider
     */
    public function TestGetDriverScore_WithBottasRaceResults_ReturnTwentyFive($driver,$race, $expected)
    {
        $db = new DatabasePlain();
        $rrlObj = new RaceResultsDriver($db, $driver, $race);
        $line = $rrlObj->getRaceResultLineByDriver();
        $scoreObj = new Score($db);
        $ans = $scoreObj->getRaceScore($line);
        $this->assertEquals($expected, $ans);
    }

    /**
     * @test
     * @dataProvider placeholderDataProvider
     */
    public function TestGetDriverScorePartOfCommand_BottasRoundOne_ReturnFortyFive($driver, $race, $expected)
    {
        $db = new DatabasePlain();
        //get resultsLine
        $rlObj = new RaceResultsDriver($db, $driver, $race);
        $lineR = $rlObj->getRaceResultLineByDriver();
        //get qualyLine
        $qlObj = new QualifyingResultsDriver($db, $driver, $race);
        $lineQ = $qlObj->getQualifyingResultLineByDriver();

        //get raceScore
        //

    }

    public function austriaOneProvider()
    {
        return [
            [],
            [],
            []
        ];
    }

    public function placeholderDataProvider()
    {
        return [
            [822,1031,25],
            [1,1031,12]
        ];
    }

}

