<?php namespace Causey\Reports;

use FormulaFantasy\Database\IDatabase;

abstract class ReportView implements IReportView
{
    protected $db;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }
}