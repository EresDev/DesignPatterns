<?php
namespace EresDev\DesignPatterns\Behavioral\Strategy;


abstract class QuestionContext implements QuestionInterface
{
    protected $prompt;
    protected $marker;

    public function __construct($prompt, MarketStrategyInterface $marker)
    {
        $this->prompt = $prompt;
        $this->marker = $marker;
    }

    public function mark($questionData)
    {
        $this->marker->mark($questionData);
    }
}