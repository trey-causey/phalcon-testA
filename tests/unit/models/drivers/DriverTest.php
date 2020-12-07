<?php namespace FormulaFantasy\Tests\Unit;

require_once __DIR__ . '/../../../unit/TestHelper.php';
require MODEL_DIR . '/driver/MainDriver.php';

use FormulaFantasy\Driver\MainDriver;
use FormulaFantasy\Database\DatabasePlain;
use PHPUnit\Exception;
use PHPUnit\Framework\TestCase;

/**  */
class DriverTest extends TestCase
{

    public function test__construct()
    {
        $this->assertInstanceOf(MainDriver::class,new MainDriver(new DatabasePlain(), 1));
    }

    public function testGetId()
    {
        $do = new MainDriver(new DatabasePlain(), 1);
        $this->assertEquals(1, $do->getId());
    }

    public function testGetData_withID_returnArray()
    {
        $do = new MainDriver(new DatabasePlain(), 1);
        $data = $do->getData();
        $this->assertIsArray($data);
    }

    /**
     * @test
     * @dataProvider driverIdForCodeProvider
     */
    public function testGetName_withID_returnDriverRef($id, $expected)
    {
        $do = new MainDriver(new DatabasePlain(), $id);
        $this->assertEquals($expected, $do->getName());
    }

    /** @test
     * @dataProvider driverRefForIdProvider
     * @param $driverRef
     * @param $expected
     */
    public function testGetDriverIdByDriverRef($driverRef, $expected)
    {
    }

    /** @test
     * @dataProvider driverCodeForIdProvider
     * @param $code
     * @param $expected
     */
    public function testGetDriverIdByCode_withThreeLetterCode_ReturnId($code, $expected)
    {
    }

    public function driverIdForCodeProvider()
    {
        return [
          [1, 'hamilton'],
          [3, 'rosberg']
        ];
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
