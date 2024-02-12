<?php

namespace Friday\Cards\Hazard\WildAnimals;

use Friday\Cards\Hazard\KnowledgeSides\Vision;

class EncounterWildAnimalsToLearnVision extends WildAnimals {
    public function __construct() {
        parent::__construct(1,
                            new Vision(3));
    }
}