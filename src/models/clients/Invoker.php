<?php namespace FormulaFantasy\Client;

include MODEL_DIR . '/score/commands/calculatePointsCommand.php';

use FormulaFantasy\Score\ScoreCommand;
//use FormulaFantasy\Utilities\Command;

class Invoker {
    /**
     * @var ScoreCommand;
     */
    private $commandOne;


    public function setCommandOne(ScoreCommand $cmd) {
        $this->commandOne = $cmd;
    }

    public function run() {
        if($this->commandOne instanceof ScoreCommand)
        {
            $this->commandOne->Execute();
        }
    }
}