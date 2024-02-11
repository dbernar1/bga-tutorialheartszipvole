<?php

namespace Cards\Hazard\KnowledgeSides;

class Repeat extends KnowledgeSide
{
    public function __construct(int $fightingValue)
    {
        parent::__construct("Repeat", $fightingValue, new DoubleFightingValueOfOneCard());
    }
}