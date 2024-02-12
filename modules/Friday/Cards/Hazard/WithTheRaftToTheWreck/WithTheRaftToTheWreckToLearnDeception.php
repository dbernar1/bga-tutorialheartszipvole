<?php

namespace Friday\Cards\Hazard\WithTheRaftToTheWreck;

use Friday\Cards\Hazard\KnowledgeSides\Deception;

class WithTheRaftToTheWreckToLearnDeception extends WithTheRaftToTheWreck {
    public function __construct() {
        parent::__construct(1,
                            new Deception(0));
    }
}