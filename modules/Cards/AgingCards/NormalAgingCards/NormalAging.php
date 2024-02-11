<?php

namespace AgingCards\NormalAgingCards;

use AgingCards\Aging;
use SpecialAbilities\SpecialAbility;

class NormalAging extends Aging
{
    public static string $type = "Normal Aging";

    public function __construct(string         $title,
                                int            $fightingValue,
                                SpecialAbility $specialAbility = null)
    {
        parent::__construct($title, $fightingValue, Aging::NORMAL, $specialAbility);
    }
}