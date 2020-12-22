<?php namespace FormulaFantasy\Draft;

use FormulaFantasy\Database\DatabasePlain;

abstract class Draft implements IDraft
{
    protected $db;

    /**
     * Draft constructor.
     * @param $db
     */
    public function __construct($db)
    {
        $this->db = $db;
    }

}