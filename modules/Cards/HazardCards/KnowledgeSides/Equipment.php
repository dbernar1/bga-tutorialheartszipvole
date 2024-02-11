<?php

namespace HazardCards\KnowledgeSides;

use SpecialAbilities\PositiveSpecialAbilities\PlusCards;

class Equipment extends KnowledgeSide
{
    public function __construct()
    {
        parent::__construct("Equipment", 0, new PlusCards(2));
    }
}