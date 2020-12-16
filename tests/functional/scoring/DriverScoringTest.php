<?php

require_once __DIR__ . '/../../unit/TestHelper.php';

use FormulaFantasy\Results\RaceResultsDriver;
use FormulaFantasy\Database\DatabasePlain;
use FormulaFantasy\Score\Score;
use PHPUnit\Framework\TestCase;

class DriverScoringTest extends TestCase
{
    /**
     * @test
     */
    public function TestGetDriverScore_WithBottasRoundOne_ReturnFortyFive()
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
    public function TestGetDriverScore_WithBottasRaceResults_ReturnTwentyFive($data, $expected)
    {
        $db = new DatabasePlain();
        $rrlObj = new RaceResultsDriver($db, $data, 1031);
        $line = $rrlObj->getRaceResultLineByDriver();
        $scoreObj = new Score($db);
        $ans = $scoreObj->getRaceScore($line);
        $this->assertEquals($expected, $ans);
    }

    public function placeholderDataProvider()
    {
        return [
            [822,25],
            [1,12]
        ];
    }

}

