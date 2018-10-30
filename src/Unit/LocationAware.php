<?php

namespace stm555\tdd\Unit;

use stm555\tdd\Dungeon\Explorable;

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