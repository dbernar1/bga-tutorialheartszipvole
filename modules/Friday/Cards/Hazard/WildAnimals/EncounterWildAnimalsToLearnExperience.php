<?php

namespace Friday\Cards\Hazard\WildAnimals;

use Friday\Cards\Hazard\KnowledgeSides\Experience;

class EncounterWildAnimalsToLearnExperience extends WildAnimals {
    public function __construct() {
        parent::__construct(1,
                            new Experience(3));
    }
}