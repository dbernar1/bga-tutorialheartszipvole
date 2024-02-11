<?php

namespace HazardCards\KnowledgeSides;

use SpecialAbilities\PositiveSpecialAbilities\SortThreeCards;

class Vision extends KnowledgeSide
{
    public function __construct(int $fightingValue)
    {
        parent::__construct("Vision", $fightingValue, new SortThreeCards());
    }
}