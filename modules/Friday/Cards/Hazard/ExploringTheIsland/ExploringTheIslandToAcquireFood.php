<?php

namespace Friday\Cards\Hazard\ExploringTheIsland;

use Friday\Cards\Hazard\KnowledgeSides\Food;

class ExploringTheIslandToAcquireFood extends ExploringTheIsland {

    public function __construct() {
        parent::__construct(2,
                            new Food(1));
    }
}