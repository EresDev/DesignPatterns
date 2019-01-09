<?php
namespace EresDev\DesignPatterns\Behavioral\Strategy;

/*
 * Interface here to achieve Inversion of Dependency and is not actually a part of strategy pattern
 */
interface MarkerStrategyInterface
{
     public function mark($questionDdata);
}