<?php

use Phalcon\Mvc\Model;

class Circuit extends Model
{
    /**
     * @var integer
     */
    public $CircuitId;

    /**
     * @var string
     */
    public $circuitRef;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $country;

    /**
     * @var float
     */
    public $lat;

    /**
     * @var float
     */
    public $lng;

    /**
     * @var integer
     */
    public $alt;

    /**
     * @var string
     */
    public $url;
}