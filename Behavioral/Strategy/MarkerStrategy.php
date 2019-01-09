<?php
namespace EresDev\DesignPatterns\Behavioral\Strategy;


abstract class MarkerStrategy implements MarkerStrategyInterface
{
    protected $test;

    public function __construct($test)
    {
        $this->test = $test;
    }
}