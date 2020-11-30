<?php namespace FormulaFantasy\Results;

use FormulaFantasy\Database\IDatabase;

require_once MODEL_DIR . '/results/Results.php';

class QualifyingResultsConstructor extends Results
{
    /** @var $constructorId */
    protected $constructorId;
    /** @var $raceId */
    protected $raceId;

    public function __construct(IDatabase $db, $constructorId, $raceId)
    {
        $this->constructorId = $constructorId;
        $this->raceId = $raceId;
        parent::__construct($db);
    }

    public function getData()
    {
        $data = [$this->constructorId, $this->raceId];
        $sql = "SELECT * FROM constructorresults WHERE constructorId = ? AND raceId = ?";
        $results = $this->db->fetchAll($sql, $data);
        return $results;
    }

    public function getId()
    {

    }
}