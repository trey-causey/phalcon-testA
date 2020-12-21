<?php namespace FormulaFantasy\Tests\Functional;

require_once __DIR__ . '/../../unit/TestHelper.php';

use FormulaFantasy\Client\Invoker;
use FormulaFantasy\Database\DatabasePlain;
use FormulaFantasy\Draft\Roster;
use FormulaFantasy\Score\CalculateManagerPointsCommand;
use FormulaFantasy\Score\Score;
use PHPUnit\Framework\TestCase;

class CalculateManagerPointsCommandTest extends TestCase
{
    /**
     * @test
     * @dataProvider RaceFinishProvider
     */
    public function testFullScoringWithCommand_WithTreyRoundOne_ReturnSixtyOne($data, $expected)
    {
        //setup
        $exampleButtonPush = new Invoker();
        $db = new DatabasePlain();
        //make sure all drivers from tested roster with be calculated



        $scoreObj = new Score($db);
        $rosObj = new Roster($db);
        //need to get draftlist (Roster)
        $rosArray = $rosObj->GetRosterByOwner($data, 1031);
        //$calcCommand = new calculatePointsCommand($scoreObj, $rosArray);
        $calcManObj = new CalculateManagerPointsCommand($scoreObj, $rosArray);

        $exampleButtonPush->setCommandOne($calcManObj);
        //run through scoring command
        $exampleButtonPush->run();
        //get answer
        $this->assertEquals($expected, $calcManObj->ans);

    }

    public function RaceFinishProvider()
    {
        return [
            [3, (11+20)],
            [6, (31+20)],
            [1, (4+20)]
        ];
    }

    public function test__construct()
    {

    }

    public function testExecute()
    {

    }
}
