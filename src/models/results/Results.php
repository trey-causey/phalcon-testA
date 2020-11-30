<?php namespace FormulaFantasy\Results;

require_once MODEL_DIR . '/results/IResults.php';

use FormulaFantasy\Database\IDatabase;

abstract class Results implements IResults {

    protected $db;
    //protected $data;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    //protected abstract function setData();

}