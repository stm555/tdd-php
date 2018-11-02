<?php

namespace stm555\tdd\Unit;

use stm555\tdd\Dungeon\Explorable;

/**
 * Trait LocationAware
 * Adds a location state and provides interaction with that location
 */
trait LocationAware
{
    /**
     * @var Explorable
     */
    private  $currentLocation;

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