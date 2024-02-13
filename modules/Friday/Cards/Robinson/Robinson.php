<?php

namespace Friday\Cards\Robinson;

use Friday\Cards\Fighting;
use Friday\SpecialAbilities\SpecialAbility;

class Robinson extends Fighting {
    const CARD_TYPE = "Robinson";

    const ROBINSON_CARD_DESTRUCTION_COST = 1;

    public function __construct(int             $howManyInDeck,
                                string          $title,
                                string          $fightingValue,
                                ?SpecialAbility $specialAbility = null) {
        parent::__construct(self::CARD_TYPE,
                            $howManyInDeck,
                            $title,
                            $fightingValue,
                            self::ROBINSON_CARD_DESTRUCTION_COST,
                            $specialAbility);
    }
}