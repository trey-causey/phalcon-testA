<?php namespace FormulaFantasy\Draft;

require_once MODEL_DIR . '/driver/MainDriver.php';

use FormulaFantasy\Database\IDatabase;
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

    /** @var Driver */
    protected $driverArray = [];

    private $teamConstructor;

    protected $db;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    /**
     * @param $array array
     */
    public function setRoster(array $array)
    {
        $this->primaryDriver = new MainDriver($this->db, $array[0]);
        $this->primaryDriver->getData();
        $this->secondaryDriver = new MainDriver($this->db, $array[1]);
        $this->secondaryDriver->getData();
        $this->turboDriver = new MainDriver($this->db, $array[2]);
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

    public function GetRosterByOwner($OwnerId, $raceId)
    {
        $params = [$OwnerId, $raceId];
        $sql =  "SELECT * FROM draftpicks where ownerId = ? AND raceId = ?";
        $ans = $this->db->fetchAll($sql, $params);
        //array_push($this->driverArray,$ans[0]['primaryDriverId']);
        //array_push($this->driverArray,$ans[0]['secondaryDriverId']);
        //array_push($this->driverArray,$ans[0]['turboDriverId']);
        return $ans[0];
    }

    public function addDriver()
    {

    }


}