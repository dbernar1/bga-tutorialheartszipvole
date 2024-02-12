<?php

namespace Friday\Cards\Hazard\KnowledgeSides;

use Friday\SpecialAbilities\Positive\PlusCards;

class Equipment extends KnowledgeSide {
    public function __construct() {
        parent::__construct("Equipment", 0, new PlusCards(2));
    }
}