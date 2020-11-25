<?php namespace FormulaFantasy\Results;

use FormulaFantasy\Database\IDatabase;

abstract class Results {

    protected $id;
    protected $db;
    protected $data;

    public function __construct(int $id, IDatabase $db)
    {
        $this->id = $id;
        $this->db = $db;
        $this->setData();
    }

    protected abstract function setData();

    public function GetData()
    {

    }
}