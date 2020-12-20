<?php namespace FormulaFantasy\Results;

use FormulaFantasy\Database\IDatabase;

class QualifyingResultsDriver extends Results
{
    /** @var $driverId */
    protected $id;
    /** @var $raceId */
    protected $raceId;

    public function __construct(IDatabase $db, $raceId)
    {
        //$this->id = $driverId;
        $this->raceId = $raceId;
        parent::__construct($db);
    }

    public function getData()
    {
        $params = [$this->raceId];
        $sql = "SELECT * from qualifying where raceId = ?";
        $ans = $this->db->fetchAll($sql, $params);
        return $ans;
    }

    public function getQualifyingResultLineByDriver($driverId)
    {
        $data = [$driverId, $this->raceId];
        $sql = "SELECT * FROM qualifying WHERE driverId = ? AND raceId = ?";
        return $this->db->fetchAll($sql, $data);
    }

    /**
     * @var $params array
     */
    public function getId()
    {
        return $this->id;
    }

    public function getBestQualifyRound($qualifyRecord)
    {
        if($qualifyRecord['q3'] != NULL)
        {
            return '3';
        } else if($qualifyRecord['q2'] != NULL)
        {
            return '2';
        } else {
            return '1';
        }
    }
}