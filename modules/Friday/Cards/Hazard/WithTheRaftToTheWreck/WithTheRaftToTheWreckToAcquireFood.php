<?php

namespace Friday\Cards\Hazard\WithTheRaftToTheWreck;

use Friday\Cards\Hazard\KnowledgeSides\Food;

class WithTheRaftToTheWreckToAcquireFood extends WithTheRaftToTheWreck {
    public function __construct() {
        parent::__construct(2,
                            new Food(0));
    }
}