<?php namespace FormulaFantasy\Tests\Unit;

require_once __DIR__ . '/../../../../TestHelper.php';

use FormulaFantasy\Database\DatabasePlain;
use FormulaFantasy\Results\RaceResultsDriver;
use PHPUnit\Framework\TestCase;

class RaceResultsDriverTest extends TestCase
{
    /**
     * @test
     */
    public function TestGetRaceResultLineByDriver_WithDriver_ReturnArray()
    {
        $rrdObj = new RaceResultsDriver(new DatabasePlain(), 822, 1031);
        $results = $rrdObj->getRaceResultLineByDriver();
        var_dump($results);
        $this->assertIsArray($results);
    }

    /**
     * @test
     * @dataProvider DriverIdProvider
     */
    public function TestGetData($data, $expected)
    {
        require_once MODEL_DIR . '/results/race/RaceResultsDriver.php';
        $QRDObj = new RaceResultsDriver(new DatabasePlain(), $data[0], $data[1]);
        $results = $QRDObj->getData();
        var_dump($results);
        $this->assertEquals($expected, $results);
    }

    public function DriverIdProvider()
    {
        return [
            [[1, 1033],[
                array (
                    'resultId' => '24666',
                    0 => '24666',
                    'number' => '44',
                    1 => '44',
                    'grid' => '1',
                    2 => '1',
                    'position' => '1',
                    3 => '1',
                    'positionText' => '1',
                    4 => '1',
                    'positionOrder' => '1',
                    5 => '1',
                    'points' => '26',
                    6 => '26',
                    'rank' => '1',
                    7 => '1',
                    'statusId' => '1',
                    8 => '1',
                    'driverRef' => 'hamilton',
                    9 => 'hamilton',
                    'code' => 'HAM',
                    10 => 'HAM',
                    'forename' => 'Lewis',
                    11 => 'Lewis',
                    'surname' => 'Hamilton',
                    12 => 'Hamilton',
                )
            ]]
        ]; //end return

    }
}

