<?php

namespace Friday\Cards\Hazard\KnowledgeSides;

use Friday\SpecialAbilities\Positive\DoubleFightingValueOfOneCard;

class Repeat extends KnowledgeSide {
    public function __construct(int $fightingValue) {
        parent::__construct("Repeat", $fightingValue, new DoubleFightingValueOfOneCard());
    }
}