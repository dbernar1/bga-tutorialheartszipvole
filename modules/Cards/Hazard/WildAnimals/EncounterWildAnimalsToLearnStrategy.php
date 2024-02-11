<?php

namespace Cards\Hazard\WildAnimals;

use Cards\Hazard\KnowledgeSides\Strategy;

class EncounterWildAnimalsToLearnStrategy extends WildAnimals
{
    public function __construct()
    {
        parent::__construct(1,
                            new Strategy(3, 1));
    }
}