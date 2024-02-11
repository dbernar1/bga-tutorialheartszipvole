<?php

namespace Cards;

use SpecialAbilities\SpecialAbility;

class Fighting
{
    public string $title;
    public int $fightingValue;
    public int $destructionCost;
    public SpecialAbility $specialAbility;

    public function __construct(string $title, int $fightingValue, int $destructionCost, SpecialAbility $specialAbility = null)
    {
        $this->title = $title;
        $this->fightingValue = $fightingValue;
        $this->destructionCost = $destructionCost;
        $this->specialAbility = $specialAbility;
    }
}