<?php namespace FormulaFantasy\Test;

use FormulaFantasy\Database\DatabasePlain;
use FormulaFantasy\Database\IDatabase;
use PDO;

require_once __DIR__ . '/../database/DatabasePlain.php';

class Test
{

    /**
     * @var IDatabase $db;
     */
    protected $db;

    protected $testId;
    protected $title;
    protected $image_path;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public function ShowWholeTable()
    {
        $sql = "SELECT * FROM test";
        $param = [];
        //$data = $this->db->query($sql, $fetchStyle = PDO::FETCH_ASSOC, $param);
        $data = $this->db->fetchAll($sql, $param);
        return $data;
    }

    public function SaveTestItem($testId, $testTitle, $image_path)
    {
        $this->testId = $testId;
        $this->title = $testTitle;
        $this->image_path = $image_path;
        $param = [$testId, $testTitle, $image_path];
        $sql = "REPLACE INTO test (testId, title, image_path) VALUES (?, ?, ?)";
        $statement = $this->db->query($sql, $fetchStyle = PDO::FETCH_ASSOC, $param);
    }
}