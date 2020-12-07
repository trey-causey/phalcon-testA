<?php namespace FormulaFantasy\Score;

require_once MODEL_DIR . './results/race/RaceResultsDriver.php';

use FormulaFantasy\Database\DatabasePlain;
use FormulaFantasy\Results\RaceResultsDriver;

class Score
{
    private $db;
    private $operator;
    private $id;
    private $data;
    private $results;

    public function __construct()
    {
        //$this->results = new RaceResultsDriver(new DatabasePlain(), )
    }

    public function calculatePointsForDriver($array)
    {
        $this->id = $array["driver1"];
        var_dump($this->id);
    }


}
