<?php

namespace Friday\Cards\Hazard\Cannibals;

use Cards\Hazard\HazardSides\Cannibals;
use Friday\Cards\Hazard\Hazard;
use Friday\Cards\Hazard\KnowledgeSides\Weapon;

class EncounterCannibalsToAcquireWeapon extends Hazard {

    public function __construct() {
        parent::__construct(2,
                            new Cannibals(),
                            new Weapon(4));
    }
}