<?php namespace FormulaFantasy\Database;

include __DIR__ . '/DatabasePlain.php';

use PDO;

class testDB {
    /**
     * @var \FormulaFantasy\Database\IDatabase $db
     */
    protected $db;

    function testThisDB()
    {
        $param = [];
        $this->db = new DatabasePlain();
        $sql = "SELECT * FROM drivers";
        $q = $this->db->query($sql, $fetchStyle = PDO::FETCH_ASSOC, $param);
        var_dump($q);
    }
}
$test = new testDB();
$test->testThisDB();


