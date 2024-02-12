<?php

namespace Friday\Cards\Hazard\KnowledgeSides;

use Cards\Hazard\KnowledgeSides\DoubleFightingValueOfOneCard;

class Repeat extends KnowledgeSide {
    public function __construct(int $fightingValue) {
        parent::__construct("Repeat", $fightingValue, new DoubleFightingValueOfOneCard());
    }
}