<?php namespace FormulaFantasy\Score;

use FormulaFantasy\Database\DatabasePlain;
use FormulaFantasy\Driver\Driver;
use FormulaFantasy\Driver\IDriver;
use phpDocumentor\Reflection\Types\Integer;

abstract class ScoreCommand {

    protected $line;
    protected $db;

    public function __construct()
    {
        $this->db = new DatabasePlain();
    }

    function Execute()
    {

    } //end Execute();

    function RunScore(IDriver $driver)
    {

    }

} //end command{}

