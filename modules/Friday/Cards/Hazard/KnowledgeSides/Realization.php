<?php

namespace Friday\Cards\Hazard\KnowledgeSides;

use Friday\SpecialAbilities\Positive\Destroy;

class Realization extends KnowledgeSide {
    public function __construct(int $fightingValue) {
        parent::__construct("Realization", $fightingValue, new Destroy(1));
    }
}