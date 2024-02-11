<?php

namespace HazardCards\KnowledgeSides;

use SpecialAbilities\PositiveSpecialAbilities\Destroy;

class Realization extends KnowledgeSide
{
    public function __construct(int $fightingValue)
    {
        parent::__construct("Realization", $fightingValue, new Destroy(1));
    }
}