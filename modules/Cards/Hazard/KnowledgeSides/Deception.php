<?php

namespace Cards\Hazard\KnowledgeSides;

use SpecialAbilities\Positive\PutOneCardBelowThePile;

class Deception extends KnowledgeSide
{
    public function __construct(int $fightingValue)
    {
        parent::__construct("Deception", $fightingValue, new PutOneCardBelowThePile());
    }
}