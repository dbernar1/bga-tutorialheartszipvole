<?php

namespace Cards\Hazard\WildAnimals;

use Cards\Hazard\KnowledgeSides\Vision;

class EncounterWildAnimalsToLearnVision extends WildAnimals
{
    public function __construct()
    {
        parent::__construct(1,
                            new Vision(3));
    }
}