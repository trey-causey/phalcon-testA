<?php namespace FormulaFantasy\Driver;

use FormulaFantasy\Database\IDatabase;
use PDO;

require_once MODEL_DIR . '/driver/IDriver.php';
require_once MODEL_DIR . '/database/DatabasePlain.php';

abstract class Driver implements IDriver
{
    /** @var IDatabase $db */
    protected $db;

    protected $id;

    protected $table;

    protected $data;

    protected $canBeSelectedMoreThanOnce;

    /**
     * @param IDatabase $db
     * @param $table
     * @param $id
     */
    public function __construct(IDatabase $db, $table, $driverId)
    {
        $this->db = $db;
        $this->table = $table;
        $this->id = $driverId;
    }

    abstract function getData();

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->getData()['driverRef'];
    }

    public function createDriver(IDatabase $db, $driverDetails)
    {
        //implement creating a new driver
    }

    public function getScoringDetails()
    {

    }
}

