<?php

namespace Cards\Hazard\KnowledgeSides;

use SpecialAbilities\Positive\PlusCards;

class Experience extends KnowledgeSide
{
    public function __construct(int $fightingValue)
    {
        parent::__construct("Experience", $fightingValue, new PlusCards(1));
    }
}