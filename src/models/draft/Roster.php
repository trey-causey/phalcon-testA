<?php namespace FormulaFantasy\Draft;

require_once MODEL_DIR . '/driver/MainDriver.php';

use FormulaFantasy\Database\DatabasePlain;
use FormulaFantasy\Driver\Driver;
use FormulaFantasy\Driver\MainDriver;

class Roster
{
    /**
     * @var Driver $primaryDriver
     * @var Driver $secondaryDriver
     * @var Driver $turboDriver
     */
    private $primaryDriver;
    private $secondaryDriver;
    private $turboDriver;

    private $teamConstructor;

    public function __construct()
    {

    }

    /**
     * @param $array array
     */
    public function setRoster(array $array)
    {
        $this->primaryDriver = new MainDriver(new DatabasePlain(), $array[0]);
        $this->primaryDriver->getData();
        $this->secondaryDriver = new MainDriver(new DatabasePlain(), $array[1]);
        $this->secondaryDriver->getData();
        $this->turboDriver = new MainDriver(new DatabasePlain(), $array[2]);
        $this->turboDriver->getData();
        //$this->teamConstructor = $teamConstructor;
    }

    public function getRoster()
    {
        $driver1 = $this->primaryDriver->getData();
        $driver2 = $this->secondaryDriver->getData();
        $driver3 = $this->turboDriver->getData();

        var_dump($driver1, $driver2, $driver3);

    }


}