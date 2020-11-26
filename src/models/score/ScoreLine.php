<?php namespace FormulaFantasy\Score;

require_once MODEL_DIR . '/database/IDatabase.php';

use FormulaFantasy\Database\IDatabase;
use FormulaFantasy\Score\IScoreLine;

abstract class ScoreLine implements IScoreLine
{
    /** @var IDatabase */
    private $db;
    private $operator;
    /** @var int */
    private $id;
    /** @var array */
    private $data;

    public function __construct(int $id, IDatabase $db)
    {

    }

  public function getData(): array
  {
      if(!isset($this->data))
      {
          $this->setData();
      }
      return $this->data;
  }

  public abstract function setData(): void;

}