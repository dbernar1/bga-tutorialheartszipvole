<?php

namespace HazardCards\KnowledgeSides;

use SpecialAbilities\PositiveSpecialAbilities\CopySpecialAbilityOfAnotherCard;

class Mimicry extends KnowledgeSide
{
    public function __construct(int $fightingValue)
    {
        parent::__construct("Mimicry", $fightingValue, new CopySpecialAbilityOfAnotherCard());
    }
}