<?php namespace Causey\Imports;

use FormulaFantasy\Database\IDatabase;

abstract class Import implements IImport
{
    protected $db;

    public function __construct(IDatabase $db) {
        $this->db = $db;
    }


}