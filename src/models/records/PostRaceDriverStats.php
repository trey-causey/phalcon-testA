<?php namespace Causey\Stats;

use FormulaFantasy\Database\IDatabase;
use FormulaFantasy\Results\QualifyingResultsDriver;
use FormulaFantasy\Results\RaceResults;

class PostRaceDriverStats extends Record {

    protected $db;

    /**
     * PostRaceDriverStats constructor.
     * @param $db
     */
    public function __construct($db)
    {
        Parent::__construct($db);
    }


    public static function create(IDatabase $db, $raceId)
    {

        $rrObj = new RaceResults($db, $raceId);
        $qrdObj = new QualifyingResultsDriver($db, $raceId);

        $raceData = $rrObj->getData();

        $params = [];

        $dbWriter = new static($db);

        foreach ($raceData as $driverRaceResults) {
            $qualifyRecord = $qrdObj->getQualifyingResultLineByDriver($driverRaceResults['driverId']);
            $qualyBestRound = $qrdObj->getBestQualifyRound($qualifyRecord[0]);
            $netPositionChange = (($driverRaceResults['grid'])-($driverRaceResults['positionOrder']));
            //$penaltyCode = 1;
            $fastestLapBool = ($driverRaceResults['rank'] == 1) ? 1 : 0;
            $params = [NULL, $raceId, $driverRaceResults['driverId'],$driverRaceResults['constructorId'], $qualyBestRound, $netPositionChange, $driverRaceResults['statusId'], $fastestLapBool];
            try {
                $sql = "INSERT INTO driverstats VALUES( ?, ?, ?, ?, ?, ?, ?, ?)";
                $db->insert($sql, $params);


            } catch (\Exception $e) {
                return $e->getMessage();
            }

        }

        return parent::baseCreate($db);
    }

    public function update($data)
    {
        $currentData = $data;
    }

    public function createStatByConstructor($constructorId)
    {
        //this means should still create records based on driver...
        //but the index should be constructors, since the drivers could vary
    }


}