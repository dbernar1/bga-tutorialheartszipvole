<?php

namespace AgingCards\DifficultAgingCards;

use AgingCards\Aging;
use SpecialAbilities\SpecialAbility;

class DifficultAging extends Aging
{
    public function __construct(string $title, int $fightingValue, SpecialAbility $specialAbility = null)
    {
        parent::__construct($title, $fightingValue, Aging::DIFFICULT, $specialAbility);
    }
}