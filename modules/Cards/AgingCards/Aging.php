<?php

namespace AgingCards;

use Cards\Fighting;
use SpecialAbilities\SpecialAbility;

/*
from typing import Literal


white_beard_aging_cards = [
    WhiteBeardAgingCard(name="Very Hungry", points=0, action=LoseLife(2)),
    WhiteBeardAgingCard(name="Idiotic", points=-4),
    WhiteBeardAgingCard(name="Depressed", points=-5),
]


 */

class Aging extends Fighting
{
    const NORMAL = "normal";
    const DIFFICULT = "difficult";
    public string $difficulty; // TODO: Can it be an enum

    public function __construct(string $title, int $fightingValue, string $difficulty, SpecialAbility $specialAbility = null)
    {
        parent::__construct($title, $fightingValue, 2, $specialAbility);
        $this->difficulty = $difficulty;
    }


}
