<?php

namespace Cards\RobinsonCards;

use Cards\Fighting;

class Robinson extends Fighting
{
    const ROBINSON_CARD_DESTRUCTION_COST = 1;

    public function __construct(string $title, string $fightingValue, string $specialAbility = null)
    {
        parent::__construct($title, $fightingValue, self::ROBINSON_CARD_DESTRUCTION_COST, $specialAbility);
    }
}