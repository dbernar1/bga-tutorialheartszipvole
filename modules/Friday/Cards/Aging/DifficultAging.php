<?php

namespace Friday\Cards\Aging;

use Friday\SpecialAbilities\SpecialAbility;

class DifficultAging extends Aging {
    const CARD_TYPE = "Difficult Aging";

    public function __construct(int            $howManyInDeck,
                                string         $title,
                                int            $fightingValue,
                                SpecialAbility $specialAbility = null) {
        parent::__construct(self::CARD_TYPE,
                            $howManyInDeck,
                            $title,
                            $fightingValue,
                            Aging::DIFFICULT,
                            $specialAbility);
    }
}