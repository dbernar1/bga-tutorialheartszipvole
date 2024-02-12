<?php

namespace Friday\Cards\Hazard\KnowledgeSides;

use Friday\SpecialAbilities\Positive\PlusCards;

class Experience extends KnowledgeSide {
    public function __construct(int $fightingValue) {
        parent::__construct("Experience", $fightingValue, new PlusCards(1));
    }
}