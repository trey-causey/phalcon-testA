<?php namespace FormulaFantasy\Score;

require_once __DIR__ . '/ScoreCommand.php';

use FormulaFantasy\Database\DatabasePlain;
use FormulaFantasy\Results\QualifyingResultsDriver;
use FormulaFantasy\Results\RaceResultsDriver;

class CalculateManagerPointsCommand extends ScoreCommand
{
    public $ans;

    private $ScoreObject;
    private $completeArray;
    private $db;
    private $driverArray = [];

    /**
     * calculatePointsCommand constructor.
     * @param Score $so
     * @param array $completeArray
     */
    public function __construct(Score $so, Array $completeArray)
    {
        parent::__construct();
        $this->ScoreObject = $so;
        $this->completeArray = $completeArray;

        $this->driverArray = [
            'primaryDriverId' => $completeArray['primaryDriverId'],
            'secondaryDriverId' => $completeArray['secondaryDriverId'],
            'turboDriverId' => $completeArray['turboDriverId']
        ];
        $this->db = new DatabasePlain();
    }

    public function Execute()
    {
        $standardDriverRunningTotal = 0;
        $turboDriverRunningTotal = 0;

            //points on driver race finish position

            //points on qualy finish position

            //points based on grid position minus finish position

            //points based on qualifying bucket

            //determine if penalties matter

            //points based on fastest lap

            //constructor points


        $this->ans = $standardDriverRunningTotal;
    }
}