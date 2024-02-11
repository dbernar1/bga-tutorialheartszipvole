<?php

namespace Cards\Hazard\Cannibals;

use Cards\Hazard\Hazard;
use Cards\Hazard\HazardSides\Cannibals;
use Cards\Hazard\KnowledgeSides\Weapon;

class EncounterCannibalsToAcquireWeapon extends Hazard
{

    public function __construct()
    {
        parent::__construct(2,
                            new Cannibals(),
                            new Weapon(4));
    }
}