<?php

require_once __DIR__ . '/../../../TestHelper.php';

use PHPUnit\Framework\TestCase;
use FormulaFantasy\Results\DriverResults;

class DriverResultsTest extends TestCase {

    public function TestGetRaceResults()
    {

    }

    public function TestGetQualifyingResults()
    {

    }

    /** @test */
    public function TestGetDriverIdsByRace()
    {
        $raceId = 1031;
        $param = [$raceId];
        $sql = "SELECT driverId FROM results WHERE raceId = ?";
        $ans = (new \FormulaFantasy\Database\DatabasePlain())->query($sql, $param);
        var_dump($ans);
    }

}