<?php

namespace Cards\Hazard\KnowledgeSides;

use SpecialAbilities\Positive\GainLife;

class Food extends KnowledgeSide
{
    public function __construct(int $fightingValue)
    {
        parent::__construct("Food", $fightingValue, new GainLife(1));
    }
}