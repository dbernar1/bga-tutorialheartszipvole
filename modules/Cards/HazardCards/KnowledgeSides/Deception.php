<?php

namespace HazardCards\KnowledgeSides;

use SpecialAbilities\PositiveSpecialAbilities\PutOneCardBelowThePile;

class Deception extends KnowledgeSide
{
    public function __construct(int $fightingValue)
    {
        parent::__construct("Deception", $fightingValue, new PutOneCardBelowThePile());
    }
}