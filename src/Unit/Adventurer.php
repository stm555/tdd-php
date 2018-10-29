<?php

namespace stm555\tdd\Unit;


use stm555\tdd\Dungeon\Explorable;
use stm555\tdd\Unit;

class Adventurer extends Unit
{
    /**
     * Available Exits from current location
     * @var Explorable[]
     */
    protected $exits = [];

    /**
     * Observe context
     */
    public function perceive()
    {
        $this->exits = $this->currentLocation()->findExits($this);
    }

    /**
     * Decision Engine for what to do
     */
    public function act()
    {
        // TODO: Implement act() method.
    }

    /**
     * Decision Engine for where to move
     */
    public function move()
    {
        foreach($this->exits as $exit) {
            //we take the first exit out
            return $this->setCurrentLocation($exit);
        }
        throw new \Exception("No Available Exit!");
    }
}