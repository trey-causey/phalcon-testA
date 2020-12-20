<?php namespace Causey\Reports;

use FormulaFantasy\Database\IDatabase;

class DriverList extends ReportView {

    private $raceId;

    public function __construct(IDatabase $db, $raceId)
    {
        $this->raceId = $raceId;
        parent::__construct($db);
    }

    public function getData() {
        $param = [$this->raceId];
        //$sql = "select driverId from construc"
    }
}

