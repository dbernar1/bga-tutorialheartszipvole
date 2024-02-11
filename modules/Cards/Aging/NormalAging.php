<?php

namespace Cards\Aging;

use SpecialAbilities\SpecialAbility;

class NormalAging extends Aging
{
    const CARD_TYPE = "Normal Aging";

    public function __construct(int            $howManyInDeck,
                                string         $title,
                                int            $fightingValue,
                                SpecialAbility $specialAbility = null)
    {
        parent::__construct(self::CARD_TYPE,
                            $howManyInDeck,
                            $title,
                            $fightingValue,
                            Aging::NORMAL,
                            $specialAbility);
    }
}