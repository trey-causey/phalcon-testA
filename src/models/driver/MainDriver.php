<?php namespace FormulaFantasy\Driver;

require_once MODEL_DIR . '/driver/Driver.php';

use FormulaFantasy\Database\IDatabase;

class MainDriver extends Driver
{
    public function __construct(IDatabase $db, $driverId)
    {
        $table = "drivers";
        parent::__construct($db, $table, $driverId);
        $this->canBeSelectedMoreThanOnce = false;
    }

    function getData()
    {
        $driverSQL = "SELECT * from drivers where driverId = ?";
        $ans = $this->db->fetchAll($driverSQL, array($this->id));
        return $ans[0];
    }

    public function createDriver(IDatabase $db, $driverData)
    {
        // TODO: Implement createDriver() method.
    }

    public function update($driverData)
    {
        // TODO: Implement update() method.
    }
}