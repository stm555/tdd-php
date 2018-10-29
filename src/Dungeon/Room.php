<?php
/**
 * Created by PhpStorm.
 * User: sthornberry
 * Date: 2018-10-29
 * Time: 10:46
 */

namespace stm555\tdd\Dungeon;


use stm555\tdd\Unit;

class Room implements Explorable
{
    /**
     * @var Explorable[]
     */
    protected $exits;

    /**
     * Room constructor.
     * @param Explorable[] $exits
     */
    public function __construct(array $exits)
    {
        $this->exits = $exits;
    }


    /**
     * Return what Exits the given Unit can see
     * @param Unit $unit
     * @return Explorable[]
     */
    public function findExits(Unit $unit): array
    {
        return $this->exits;
    }

    public function addExit(Explorable $exit)
    {
        $this->exits[] = $exit;
    }
}