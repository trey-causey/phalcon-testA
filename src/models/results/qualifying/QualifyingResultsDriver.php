<?php namespace FormulaFantasy\Results;

use FormulaFantasy\Database\IDatabase;

class QualifyingResultsDriver extends Results
{
    /** @var $driverId */
    protected $id;
    /** @var $raceId */
    protected $raceId;

    public function __construct(IDatabase $db, $driverId, $raceId)
    {
        $this->id = $driverId;
        $this->raceId = $raceId;
        parent::__construct($db);
    }

    public function getData()
    {

    }

    public function getQualifyingResultLineByDriver()
    {
        $data = [$this->id, $this->raceId];
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
}