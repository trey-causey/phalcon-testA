<?php namespace FormulaFantasy\Results;

use FormulaFantasy\Database\IDatabase;

require_once MODEL_DIR . '/results/Results.php';

class RaceResultsDriver extends Results
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
        $data = [$this->id, $this->raceId];
        $sql = "SELECT re.resultId, re.number, re.grid, re.position, re.positionText, re.positionOrder, re.points, re.rank, re.statusId, dr.driverRef, dr.code, dr.forename, dr.surname
                FROM results re
                INNER JOIN drivers dr ON re.driverId = dr.driverId
                WHERE dr.driverId = ?
                AND re.raceId = ?";
        $ans = $this->db->fetchAll($sql, $data);
        return $ans;
    }

    public function getRaceResultLineByDriver()
    {
        $data = [$this->id, $this->raceId];
        $sql = "SELECT * FROM results WHERE driverId = ? AND raceId = ?";
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
