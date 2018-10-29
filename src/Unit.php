<?php

namespace stm555\tdd;

use stm555\tdd\Dungeon\Explorable;

/**
 * A single unit that can interact with a Dungeon
 */
Abstract Class Unit
{
    /**
     * @var Explorable
     */
    private  $currentLocation;

    /**
     * Examine the current location
     * @return mixed
     */
    abstract public function perceive();

    /**
     * Act on the current location
     * @return mixed
     */
    abstract public function act();

    /**
     * Move to the next location
     * @return mixed
     */
    abstract public function move();


    public function __construct(Explorable $currentLocation)
    {
        $this->currentLocation = $currentLocation;
    }

    /**
     * @return Explorable
     */
    public function currentLocation(): Explorable
    {
        return $this->currentLocation;
    }

    /**
     * @param Explorable $location
     */
    protected function setCurrentLocation(Explorable $location)
    {
        $this->currentLocation = $location;
    }
}