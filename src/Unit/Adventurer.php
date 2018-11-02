<?php

namespace stm555\tdd\Unit;


use stm555\tdd\Dungeon\Explorable;
use stm555\tdd\Unit;

class Adventurer implements Unit
{
    use LocationAware; //adds location awareness

    /**
     * Available Exits from current location
     * @var Explorable[]
     */
    protected $exits = [];

    /**
     * Observe context
     */
    protected function perceive()
    {
        $this->exits = $this->currentLocation()->findExits($this);
    }

    /**
     * Decision Engine for what to do
     */
    protected function act()
    {
        // TODO: Implement act() method.
    }

    /**
     * Decision Engine for where to move
     * @throws \Exception
     */
    protected function move()
    {
        foreach($this->exits as $exit) {
            //we take the first exit out
            $this->setCurrentLocation($exit);
            return;
        }
        throw new \Exception("No Available Exit!");
    }

    /**
     * Take turn (typically some combination of perceive, act & move)
     * @throws \Exception
     */
    public function takeTurn()
    {
        $this->perceive();
        $this->act();
        $this->move();
    }
}