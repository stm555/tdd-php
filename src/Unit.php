<?php

namespace stm555\tdd;

/**
 * A single unit that can interact with a Dungeon
 */
Interface Unit
{
    /**
     * Examine the current location
     */
    public function perceive();

    /**
     * Act on the current location
     */
    public function act();

    /**
     * Move to the next location
     */
    public function move();

}