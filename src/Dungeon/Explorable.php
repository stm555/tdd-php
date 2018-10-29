<?php

namespace stm555\tdd\Dungeon;


use stm555\tdd\Unit;

interface Explorable
{

    /**
     * Return what Exits the given Unit can see
     * @param Unit $unit
     * @return Explorable[]
     */
    public function findExits(Unit $unit): array;
}