<?php
namespace EresDev\DesignPatterns\Behavioral\Strategy;


class StringMatchMarker extends MarkerStrategy
{
    public function __construct($test)
    {
        parent::__construct($test);
    }

    public function mark($questionDdata)
    {
       //do the actual marking
    }
}