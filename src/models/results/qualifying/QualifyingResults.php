<?php namespace FormulaFantasy\Results;

use FormulaFantasy\Database\IDatabase;

class QualifyingResults extends Results
{
    protected $raceId;
    /**
     * RaceResults constructor.
     */
    public function __construct(IDatabase $db, $raceId)
    {
        Parent::__construct($db);
        $this->raceId = $raceId;
    }

    public function getData()
    {
        $params = [$this->raceId];
        $sql = "SELECT * from qualifying where raceId = ?";
        $ans = $this->db->fetchAll($sql, $params);
        return $ans;
    }

}