<?php

namespace stm555\tdd;

use PHPUnit\Framework\TestCase;
use stm555\tdd\Dungeon\{Explorable, Room};


abstract class Dungeon extends TestCase
{
    const START = 'outside';
    const END = 'inside';

    /**
     * The Units who will be attempting the dungeon
     * It is up to the implementor to define the party during setup
     * @var Unit[]
     */
    protected $theParty = [];

    /**
     * The rooms of the dungeon
     * @var Explorable[]
     */
    protected $map = [];

    protected function setUp()
    {
        parent::setUp();
        //Add an entrance to the dungeon
        $foyer = new Room([]);
        $outside = new Room([$foyer]);
        //Give the foyer an exit back to outside
        $foyer->addExit($outside);
        $this->map[self::START] = $outside;
        $this->map[self::END] = $foyer;
    }

    /**
     * In which the party is recruited
     */
    public function testGatherYourParty()
    {
        $this->assertNotEmpty($this->theParty, "You did not recruit any adventurers");
        foreach ($this->theParty as $unit) {
            $this->assertInstanceOf(Unit::class, $unit, "Only Units can be recruited for adventuring");
        }
    }

    /**
     * In which the party Enters The Dungeon
     */
    public function testEnterTheDungeon()
    {
        //First Turn
        array_walk($this->theParty, function (Unit $unit) { $unit->takeTurn(); });

        foreach ($this->theParty as $unit) {
            $this->assertSame($this->map[self::END], $unit->currentLocation(), "This Unit did not make it inside");
        }
    }

    /**
     * In which the party Exits the Dungeon
     */
    public function testExitTheDungeon()
    {
        //take first turn for all units
        array_walk($this->theParty, function (Unit $unit) { $unit->takeTurn(); });
        //Take a second turn
        array_walk($this->theParty, function (Unit $unit) { $unit->takeTurn(); });

        foreach ($this->theParty as $unit) {
            $this->assertSame($this->map[self::START], $unit->currentLocation(), "This Unit did not make it back outside");
        }
    }
}