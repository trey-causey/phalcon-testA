<?php namespace Causey\Imports;

use FormulaFantasy\Database\IDatabase;

class RacesImport extends Import {

    const R_MAP = array(
      "raceId" => "raceId",
      "year" => "year",
      "round" => "round",
      "circuitId" => "circuitId",
      "name"=> "name",
      "date" => "date",
      "time" => "url",
    );

    /**
     * RacesImport constructor.
     */
    public function __construct(IDatabase $db)
    {
        Parent::__construct($db);
    }


    public function import()
    {
        $params = [];
        $sql = "SELECT * from races";
        $data = $this->db->fetchAll($sql, $params);
        return $data;
    }
}