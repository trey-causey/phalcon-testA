<?php namespace unit\models\drivers;

require_once __DIR__ . '/../../../../src/Models/driver/Driver.php';

use Models\driver\Driver;
use Models\database\DatabasePlain;
use PHPUnit\Exception;
use PHPUnit\Framework\TestCase;

/**  */
class DriverTest extends TestCase
{

    public function test__construct()
    {

        $this->assertInstanceOf(Driver::class,new Driver(new DatabasePlain()));
    }
    /** @test
     * @dataProvider driverRefForIdProvider
     * @param $driverRef
     * @param $expected
     */
    public function testGetDriverIdByDriverRef($driverRef, $expected)
    {
        $driverObject = new Driver(new DatabasePlain());
        $this->assertEquals($expected, $driverObject->GetDriverIdByDriverRef($driverRef));
    }

    /** @test
     * @dataProvider driverCodeForIdProvider
     * @param $code
     * @param $expected
     */
    public function testGetDriverIdByCode_withThreeLetterCode_ReturnId($code, $expected)
    {
        $driverObject = new Driver(new DatabasePlain());
        $this->assertEquals($expected, $driverObject->GetDriverIdByCode($code));
    }

    public function driverCodeForIdProvider()
    {
        return [
        ['VER', 830],
            ['MAS', 13]
        ];
    }

    public function driverRefForIdProvider()
    {
        return [
            ['hamilton', 1],
            ['rosberg', 3]
        ];
    }
}
