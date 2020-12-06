<?php namespace FormulaFantasy\Client;

include MODEL_DIR . '/score/commands/calculatePointsCommand.php';

use FormulaFantasy\Utilities\Command;

class Invoker {
    /**
     * @var Command;
     */
    private $commandOne;

    public function setCommandOne(Command $cmd) {
        $this->commandOne = $cmd;
    }

    public function run() {
        if($this->commandOne instanceof Command)
        {
            $this->commandOne->Execute();
        }
    }
}