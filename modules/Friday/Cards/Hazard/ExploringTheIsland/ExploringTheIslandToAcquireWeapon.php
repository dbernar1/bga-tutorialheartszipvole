<?php

namespace Friday\Cards\Hazard\ExploringTheIsland;

use Friday\Cards\Hazard\KnowledgeSides\Weapon;

class ExploringTheIslandToAcquireWeapon extends ExploringTheIsland {

    public function __construct() {
        parent::__construct(2,
                            new Weapon(2));
    }
}