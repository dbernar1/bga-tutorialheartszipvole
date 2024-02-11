<?php

namespace Cards\Hazard\KnowledgeSides;

use SpecialAbilities\Positive\PlusCards;

class Equipment extends KnowledgeSide
{
    public function __construct()
    {
        parent::__construct("Equipment", 0, new PlusCards(2));
    }
}