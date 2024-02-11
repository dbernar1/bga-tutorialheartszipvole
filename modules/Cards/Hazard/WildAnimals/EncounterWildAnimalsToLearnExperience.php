<?php

namespace Cards\Hazard\WildAnimals;

use Cards\Hazard\KnowledgeSides\Experience;

class EncounterWildAnimalsToLearnExperience extends WildAnimals
{
    public function __construct()
    {
        parent::__construct(1,
                            new Experience(3));
    }
}