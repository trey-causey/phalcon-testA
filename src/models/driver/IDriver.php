<?php namespace FormulaFantasy\Driver;

use FormulaFantasy\Database\IDatabase;

interface IDriver
{
    public function getId();
    public function getName();

    public function createDriver(IDatabase $db, $driverData);
    public function update($driverData);
}