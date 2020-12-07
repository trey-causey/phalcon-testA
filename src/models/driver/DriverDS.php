<?php namespace FormulaFantasy\Driver;

class DriverDS {
    private $driverId;
    private $driverRef;
    private $number;
    private $code;
    private $forename;
    private $surname;
    private $dob;
    private $nationality;
    private $url;

    /**
     * DriverDS constructor.
     * @param $driverId
     * @param $driverRef
     * @param $number
     * @param $code
     * @param $forename
     * @param $surname
     * @param $dob
     * @param $nationality
     * @param $url
     */
    public function __construct($driverId, $driverRef, $number, $code, $forename, $surname, $dob, $nationality, $url)
    {
        $this->driverId = $driverId;
        $this->driverRef = $driverRef;
        $this->number = $number;
        $this->code = $code;
        $this->forename = $forename;
        $this->surname = $surname;
        $this->dob = $dob;
        $this->nationality = $nationality;
        $this->url = $url;
    }

}