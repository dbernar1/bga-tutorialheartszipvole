<?php

namespace Friday\Cards\Hazard\FurtherExploringTheIsland;

use Friday\Cards\Hazard\KnowledgeSides\Food;

class FurtherExploringTheIslandToAcquireFood extends FurtherExploringTheIsland {
    public function __construct() {
        parent::__construct(1,
                            new Food(2));
    }
}