<?php


namespace FormulaFantasy\Draft;


use FormulaFantasy\Database\IDatabase;

class DraftList extends Draft
{
    protected $id;
    protected $raceId;

    public function __construct(IDatabase $db)
    {

    }

    public function read()
    {
        //parent::read(); // TODO: Change the autogenerated stub
        $sql =
    }
}