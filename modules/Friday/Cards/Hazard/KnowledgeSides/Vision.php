<?php

namespace Friday\Cards\Hazard\KnowledgeSides;

use Friday\SpecialAbilities\Positive\SortThreeCards;

class Vision extends KnowledgeSide {
    public function __construct(int $fightingValue) {
        parent::__construct("Vision", $fightingValue, new SortThreeCards());
    }
}