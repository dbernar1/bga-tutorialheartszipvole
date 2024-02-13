<?php

namespace Friday\Cards\Hazard\Cannibals;

use Friday\Cards\Hazard\Hazard;
use Friday\Cards\Hazard\KnowledgeSides\Weapon;
use Friday\Cards\Hazard\PointsNeededToWinHazard;

class EncounterCannibalsToAcquireWeapon extends Hazard {

    public function __construct() {
        parent::__construct(2,
                            "Cannibals",
                            5,
                            new PointsNeededToWinHazard(5,
                                                        9,
                                                        14),
                            new Weapon(4));
    }
}