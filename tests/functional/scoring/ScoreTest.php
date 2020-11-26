<?php namespace FormulaFantasy\Tests\Functional;

require __DIR__ . '/../../../common/setup/configurationTests.php';

include MODEL_DIR . '/teamOwner/TeamOwner.php';
require __DIR__ . '/../../../src/utils/raceResults.php';
require __DIR__ . '/../../../src/libs/Receiver.php';
require MODEL_DIR . '/client/Invoker.php';
require __DIR__ . '/../../../src/utils/cacheFunction.php';
require MODEL_DIR . '/Draft/Queries/GetDraftList/GetDraftListQuery.php';
require MODEL_DIR . '/Qualifying/Queries/GetQualifyingList/GetQualifyingListQuery.php';

use FormulaFantasy\Client\Invoker;
use FormulaFantasy\Qualifying\GetQualifyingListQuery;
use FormulaFantasy\TeamOwner;
use FormulaFantasy\Score\calculatePointsCommand;
use FormulaFantasy\Draft\GetDraftListQuery;
use PHPUnit\Framework\TestCase;
use function testNameSpace\setCachedRaceResults;
use function testNameSpace\setRaceResultArray;

class ScoringTestOld extends TestCase
{
    /**
     * @test
     * @dataProvider setDriverArrayProvider
     * @param array $theDriverStuff
     */
    public function testScoring_WithTeamOwnerRoundOne_ReturnPoints($theDriverStuff, $expected)
    {
        //set draft pick array
        //set race results array
        //set qualifying array
    }

    /**
     * @test
     * @dataProvider setDriverArrayProvider
     * @param $theDriverStuff
     */
    public function testCommandPattern($theDriverStuff, $expected)
    {

        $examplePushButton = new Invoker();
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
}