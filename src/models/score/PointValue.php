<?php namespace FormulaFantasy\Score;

use FormulaFantasy\Database\DatabasePlain;
use FormulaFantasy\Database\IDatabase;

class PointValue
{
    protected $db;
    protected $table;
    protected $valuePlace;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public function getPoints($positionOrder)
    {
        $param = [$positionOrder];
        $sql = "SELECT pointValue FROM racepointvalue WHERE positionOrder = ?";
        return $this->db->query($sql, $param);
    }

    public function getPointsFromPlaceAndCategory($params)
    {
        $sql = "SELECT pointValue FROM pointvalues WHERE rankValue = ? AND category = ?";
        return $this->db->query($sql, $params)['pointValue'];

    }
}