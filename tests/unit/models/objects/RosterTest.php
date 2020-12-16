<?php namespace FormulaFantasy\Draft;

require_once __DIR__ . '/../../../unit/TestHelper.php';
//require MODEL_DIR . '/draft/Roster.php';

use FormulaFantasy\Database\DatabasePlain;
use PHPUnit\Framework\TestCase;

class RosterTest extends TestCase
{

    public function test__construct()
    {
        $ro = new Roster(new DatabasePlain());
        $this->assertInstanceOf(Roster::class, $ro);
    }

    public function testSetRoster()
    {
        $ro = new Roster(new DatabasePlain());
        $ro->setRoster(array(1,20, 825));
        $ro->getRoster();
    }

    /**
     * @test
     * @dataProvider rosterDataProvider
     */
    public function testGetRosterByOwner($data, $expected)
    {
        $ro = new Roster(new DatabasePlain());
        $drivers = $ro->GetRosterByOwner($data, 1031);
        $this->assertEquals($expected, $drivers);

    }

    public function rosterDataProvider()
    {
        return [
            [1,[830,839,154]],
            [2,[1, 840, 826]]
        ];
    }
}
