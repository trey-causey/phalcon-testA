<?php namespace FormulaFantasy\Score;

require_once MODEL_DIR .'/database/IDatabase.php';

use FormulaFantasy\Database\IDatabase;

interface IScoreLine {

    public static function create(IDatabase $db, array $data): ScoreLine;

    public function getData(): array;

}