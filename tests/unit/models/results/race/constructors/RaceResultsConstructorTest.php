<?php namespace FormulaFantasy\Tests\Unit;

require_once __DIR__ . '/../../../../TestHelper.php';
require_once MODEL_DIR . '/database/DatabasePlain.php';

use FormulaFantasy\Database\DatabasePlain;
use FormulaFantasy\Results\RaceResultsConstructor;
use PHPUnit\Framework\TestCase;

class RaceResultsConstructorTest extends TestCase
{
    /**
     * @test
     * @dataProvider constructorIdProvider
     */
    public function TestGetData($data, $expected)
    {
        require_once MODEL_DIR . '/results/race/RaceResultsConstructor.php';
        $QRCObj = new RaceResultsConstructor(new DatabasePlain(), $data[0], $data[1]);
        $this->assertEquals($expected, $QRCObj->getData());
    }

    public function constructorIdProvider()
    {
        return [
            [[131,1031],[
                    array (
                        'constructorResultsId' => '16060',
                        0 => '16060',
                        'raceId' => '1031',
                        1 => '1031',
                        'constructorId' => '131',
                        2 => '131',
                        'points' => '37',
                        3 => '37',
                        'status' => NULL,
                        4 => NULL,
            )
            ]]
        ]; //end return
    }
}
