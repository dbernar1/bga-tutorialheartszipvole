<?php

namespace HazardCards\KnowledgeSides;

use SpecialAbilities\PositiveSpecialAbilities\PlusCards;

class Experience extends KnowledgeSide
{
    public function __construct(int $fightingValue)
    {
        parent::__construct("Experience", $fightingValue, new PlusCards(1));
    }
}