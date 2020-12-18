<?php namespace FormulaFantasy\Tests\Functional;

require __DIR__ . '/../../../common/setup/configurationTests.php';

include MODEL_DIR . '/teamOwner/TeamOwner.php';
require_once MODEL_DIR . '/score/Score.php';
require __DIR__ . '/../../../src/utils/raceResults.php';
require __DIR__ . '/../../../src/libs/Receiver.php';
require MODEL_DIR . '/clients/Invoker.php';
require __DIR__ . '/../../../src/utils/cacheFunction.php';

use FormulaFantasy\Client\Invoker;
use FormulaFantasy\Database\DatabasePlain;
use FormulaFantasy\Draft\Roster;
use FormulaFantasy\Qualifying\GetQualifyingListQuery;
use FormulaFantasy\Results\RaceResultsDriver;
use FormulaFantasy\Score\Score;
use FormulaFantasy\Score\calculatePointsCommand;
use FormulaFantasy\Draft\GetDraftListQuery;
use PHPUnit\Framework\TestCase;

class ScoreTest extends TestCase
{
    /**
     * @test
     */
    public function testFullScoringWithCommand_WithTreyRoundOne_ReturnSixtyOne()
    {
        //make sure all drivers from tested roster with be calculated
    }

    /**
     * @test
     * @dataProvider RaceFinishProvider
     * @param array $theDriverStuff
     */
    public function testRaceScoring_WithTeamOwnerRoundOne_ReturnPoints($data, $expected)
    {
        $pointTotal = 0;
        $db = new DatabasePlain();
        $scoreObj = new Score($db);
        //set draft pick array (roster)
        $rosObj = new Roster($db);
        $rosArray = $rosObj->GetRosterByOwner($data, 1031);
        //foreach driver in roster,
        foreach ($rosArray as $item)
        {
            // set raceResultLine
            $line = (new RaceResultsDriver($db, $item, 1031))->getRaceResultLineByDriver();
            $pointTotal += $scoreObj->getRaceScore($line);

        }
        //set qualifyingResultLine
        $this->assertEquals($expected, $pointTotal);
    }

    /**
     * @test
     * @dataProvider RaceFinishProvider
     * @param $theDriverStuff
     */
    public function testCommandPattern($data, $expected)
    {

        $db = new DatabasePlain();
        $exampleButtonPush = new Invoker();
        $scoreObj = new Score($db);
        $rosObj = new Roster($db);
        $rosArray = $rosObj->GetRosterByOwner($data, 1031);
        $calcCommand = new calculatePointsCommand($scoreObj, $rosArray);

        $exampleButtonPush->setCommandOne($calcCommand);

        $exampleButtonPush->run();
        $this->assertEquals($expected, $calcCommand->ans);
    }

    public function RaceFinishProvider()
    {
        return [
            [3, (11+20)],
            [6, (31+20)],
            [1, (4+20)]
        ];
    }


    public function getOneDraftItemProvider()
    {
        $draftQueryObject = new GetDraftListQuery();
        $DraftArr = $draftQueryObject->GetDraftListByDraftId(1003);
        return $DraftArr;
    }

    public function getOneQualifyingItemProvider()
    {
        $qualifyingQueryObject = new GetQualifyingListQuery();
        $QualArr = $qualifyingQueryObject->GetQualifyingListByRaceID(1031);
        return $QualArr;
    }
    public function setDriverArrayProvider()
    {
        return [
            [["driver1" => 5,
                "driver2" => 55,
                "turboDriver" => 26,
                "constructor" => "ferrari"],61],
            [["driver1" => 77,
                "driver2" => 10,
                "turboDriver" => 26,
                "constructor" => "mercedes"],110]
        ]
            ;
    }
    public function driverRaceResultsDataProvider()
    {
        return [

        ];//end return
    }

}