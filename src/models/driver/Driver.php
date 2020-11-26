<?php namespace FormulaFantasy\Driver;

use FormulaFantasy\Database\IDatabase;
use PDO;

require_once __DIR__ . '/../database/DatabasePlain.php';

class Driver
{
    protected $driverId;

    /**
     * @var IDatabase $db;
     */
    protected $db;
    protected $driverRef;
    protected $number;
    protected $code;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public function GetDriverIdByDriverRef($driverRef)
    {
        $sql = "SELECT * FROM drivers where driverRef = ?";
        $param = [$driverRef];
       $data = $this->db->query($sql, $fetchStyle = PDO::FETCH_ASSOC, $param);
        $arr = [];
        foreach ($data as $item)
        {
            array_push($arr,$item['driverId']);
        }
        $max = intval(max($arr));
        return $max;

    }

    public function GetDriverIdByCode($code)
    {
        $sql = "SELECT * FROM drivers where code = ?";
        $param = [$code];
        $data = $this->db->query($sql, $fetchStyle = PDO::FETCH_ASSOC, $param);
        $arr = [];
        foreach ($data as $item)
        {
            array_push($arr,$item['driverId']);
        }
        $max = intval(max($arr));
        return $max;
    }
}

