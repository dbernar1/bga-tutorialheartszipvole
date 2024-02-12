<?php

namespace Friday\Cards\Hazard\WithTheRaftToTheWreck;

use Friday\Cards\Hazard\KnowledgeSides\Strategy;

class WithTheRaftToTheWreckToDevelopStrategy extends WithTheRaftToTheWreck {
    public function __construct() {
        parent::__construct(2,
                            new Strategy(0, 2));
    }
}