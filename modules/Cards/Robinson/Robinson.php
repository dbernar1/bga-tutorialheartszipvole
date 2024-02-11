<?php

namespace Cards\Robinson;

use Cards\Fighting;
use SpecialAbilities\SpecialAbility;

class Robinson extends Fighting
{
    public static string $type = "Robinson";

    const ROBINSON_CARD_DESTRUCTION_COST = 1;

    public function __construct(string         $title,
                                string         $fightingValue,
                                SpecialAbility $specialAbility = null)
    {
        parent::__construct($title, $fightingValue, self::ROBINSON_CARD_DESTRUCTION_COST, $specialAbility);
    }
}