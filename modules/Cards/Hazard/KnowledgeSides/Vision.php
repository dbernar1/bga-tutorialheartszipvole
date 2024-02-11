<?php

namespace Cards\Hazard\KnowledgeSides;

use SpecialAbilities\Positive\SortThreeCards;

class Vision extends KnowledgeSide
{
    public function __construct(int $fightingValue)
    {
        parent::__construct("Vision", $fightingValue, new SortThreeCards());
    }
}