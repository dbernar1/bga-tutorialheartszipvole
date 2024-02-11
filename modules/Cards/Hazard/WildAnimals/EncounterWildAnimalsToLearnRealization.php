<?php

namespace Cards\Hazard\WildAnimals;

use Cards\Hazard\KnowledgeSides\Realization;

class EncounterWildAnimalsToLearnRealization extends WildAnimals
{
    public function __construct()
    {
        parent::__construct(1,
                            new Realization(3));
    }
}