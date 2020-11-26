<?php namespace FormulaFantasy\Client;

include __DIR__ . '/../../utils/scoring/calculatePointsCommand.php';

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