<?php namespace Causey\Stats;

use FormulaFantasy\Database\IDatabase;
use FormulaFantasy\Results\RaceResults;

abstract class Record
{
    protected $db;

    /**
     * Record constructor.
     * @param $db
     */
    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public static function baseCreate(IDatabase $db)
    {
        $report = new static($db);
        return $report;
    }



    /*public function getData()
    {
        $rrObj = new RaceResults($this->db, $raceId);
    }*/



}