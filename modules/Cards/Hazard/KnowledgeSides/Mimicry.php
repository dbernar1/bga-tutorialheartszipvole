<?php

namespace Cards\Hazard\KnowledgeSides;

use SpecialAbilities\Positive\CopySpecialAbilityOfAnotherCard;

class Mimicry extends KnowledgeSide
{
    public function __construct(int $fightingValue)
    {
        parent::__construct("Mimicry", $fightingValue, new CopySpecialAbilityOfAnotherCard());
    }
}