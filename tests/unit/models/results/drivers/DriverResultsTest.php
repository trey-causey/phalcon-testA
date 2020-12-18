<?php

require_once __DIR__ . '/../../../TestHelper.php';

use PHPUnit\Framework\TestCase;
use FormulaFantasy\Results\DriverResults;
use FormulaFantasy\Database\DatabasePlain;
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
        $db = new DatabasePlain();
        $param = [1031];
        $sql = "SELECT driverId FROM results WHERE raceId = ? order by driverId";
        $ans = $db->fetchAll($sql, $param);
        var_dump($ans);
        $this->assertIsArray($ans);
    }

}