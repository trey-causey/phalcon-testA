<?php namespace Causey\Reports;

use FormulaFantasy\Database\IDatabase;

class DriverStandings extends ReportView {

    /**
     * DriversStandings constructor.
     */
    public function __construct(IDatabase $db)
    {
        parent::__construct($db);
    }

    public function getData()
    {
        // TODO: Implement getData() method.
    }
}