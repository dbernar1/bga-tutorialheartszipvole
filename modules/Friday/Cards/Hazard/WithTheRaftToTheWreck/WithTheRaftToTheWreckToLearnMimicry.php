<?php

namespace Friday\Cards\Hazard\WithTheRaftToTheWreck;

use Friday\Cards\Hazard\KnowledgeSides\Mimicry;

class WithTheRaftToTheWreckToLearnMimicry extends WithTheRaftToTheWreck {
    public function __construct() {
        parent::__construct(1,
                            new Mimicry(0));
    }
}