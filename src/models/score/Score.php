<?php namespace FormulaFantasy\Score;

use FormulaFantasy\Database\IDatabase;

require_once __DIR__ . '/PointValue.php';

class Score
{
    private $db;
    private $operator;
    private $id;
    private $data;
    private $results;

    public function __construct(IDatabase $db)
    {
        //$this->results = new RaceResultsDriver(new DatabasePlain(), )
        $this->db = $db;
    }

    public function calculatePointsForDriver($array)
    {
        $this->id = $array["driver1"];
        var_dump($this->id);
    }

    public function getRaceScore($resultsLine)
    {
        $positionOrder = $resultsLine[0]["positionOrder"];
        $pvObj = new PointValue($this->db);
        $placePointValue = $pvObj->getPoints($positionOrder);
        return $placePointValue['pointValue'];
    }

    public function getQualifyingScore($resultsLine)
    {
        $runningTotal = 0;
        if($resultsLine[0]["q3"] != NULL)
        {
            $runningTotal += 10;
        } elseif ($resultsLine[0]["q2"] != NULL)
        {
            $runningTotal += 5;
        };
        return $runningTotal;
    }

}
