<?php

namespace Friday\Cards\Aging;

use Friday\Cards\Fighting;
use Friday\SpecialAbilities\SpecialAbility;

class Aging extends Fighting {
    const NORMAL = "normal";
    const DIFFICULT = "difficult";
    public string $difficulty; // TODO: Can it be an enum

    public function __construct(string         $cardType,
                                int            $howManyInDeck,
                                string         $title,
                                int            $fightingValue,
                                string         $difficulty,
                                SpecialAbility $specialAbility = null) {
        parent::__construct($cardType,
                            $howManyInDeck,
                            $title,
                            $fightingValue,
                            2,
                            $specialAbility);
        $this->difficulty = $difficulty;
    }
}
