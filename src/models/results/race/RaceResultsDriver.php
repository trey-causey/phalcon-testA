<?php namespace FormulaFantasy\Results;

use FormulaFantasy\Database\IDatabase;

require_once MODEL_DIR . '/database/IDatabase.php';
require_once MODEL_DIR . '/results/Results.php';

class RaceResultsDriver extends Results
{
    protected $driverId;
    protected $raceId;

    public function getData()
    {
        // TODO: Implement getData() method.
    }

    /**
     * @var $params array
     */
    public function getResultsById($params)
    {
        $sql = "SELECT re.resultId, re.number, re.grid, re.position, re.positionText, re.positionOrder, re.points, re.rank, re.statusId, dr.driverRef, dr.code, dr.forename, dr.surname
                FROM results re
                INNER JOIN drivers dr ON re.driverId = dr.driverId
                WHERE dr.driverId = ?
                AND re.raceId = ?";
        $ans = $this->db->fetchAll($sql, $params);
    }

    public function __construct(IDatabase $db)
    {
        parent::__construct($db);
    }


}
