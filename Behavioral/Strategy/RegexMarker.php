<?php
namespace EresDev\DesignPatterns\Behavioral\Strategy;


class RegexMarker extends MarkerStrategy
{
    public function __construct($test)
    {
        parent::__construct($test);
    }

    public function mark($questionDdata)
    {
        // do regex marking
    }
}