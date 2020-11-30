<?php namespace FormulaFantasy\Draft;

use FormulaFantasy\Database\IDatabase;

interface IDraft
{
    public function create();
    public function read();
    public function update();
    public function delete();
}