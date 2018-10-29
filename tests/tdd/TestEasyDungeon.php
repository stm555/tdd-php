<?php

namespace stm555\tdd;


use stm555\tdd\Unit\Adventurer;

class TestEasyDungeon extends Dungeon
{
    /**
     * Prepare for your adventure
     */
    protected function setUp()
    {
        parent::setUp();
        $this->theParty[] = new Adventurer($this->map[Dungeon::START]);
    }

}
