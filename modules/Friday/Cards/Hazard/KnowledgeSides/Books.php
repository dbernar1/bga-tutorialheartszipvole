<?php

namespace Friday\Cards\Hazard\KnowledgeSides;

use Friday\SpecialAbilities\Positive\PreviousPhase;

class Books extends KnowledgeSide {
    public function __construct() {
        parent::__construct("Books", 0, new PreviousPhase());
    }
}