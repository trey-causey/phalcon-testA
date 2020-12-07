<?php namespace FormulaFantasy\Draft;

require_once __DIR__ . '/../../../unit/TestHelper.php';
require MODEL_DIR . '/draft/Roster.php';

use PHPUnit\Framework\TestCase;

class RosterTest extends TestCase
{

    public function test__construct()
    {
        $ro = new Roster();
        $this->assertInstanceOf(Roster::class, $ro);
    }

    public function testSetRoster()
    {
        $ro = new Roster();
        $ro->setRoster(array(1,20, 825));
        $ro->getRoster();
    }
}
