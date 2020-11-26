<?php namespace FormulaFantasy\Results;

use FormulaFantasy\Database\IDatabase;

abstract class Results {


    protected $db;
    //protected $data;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    //protected abstract function setData();

}