<?php namespace FormulaFantasy\Results;

use FormulaFantasy\Database\IDatabase;

class DriverResults extends Results {

    public function __construct(IDatabase $db)
    {
        parent::__construct($db);
    }

    public function getData()
    {

    }
}