<?php

namespace stm555\tdd;

use stm555\tdd\Dungeon\Explorable;

/**
 * A single unit that can interact with a Dungeon
 */
Interface Unit
{
    /**
     * Take turn (typically some combination of perceive, act & move)
     */
    public function takeTurn();

    /**
     * Provides the current location of the Unit
     * @return Explorable
     */
    public function currentLocation() : Explorable;

}