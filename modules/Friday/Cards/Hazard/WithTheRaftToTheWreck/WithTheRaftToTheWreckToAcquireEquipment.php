<?php

namespace Friday\Cards\Hazard\WithTheRaftToTheWreck;

use Friday\Cards\Hazard\KnowledgeSides\Equipment;

class WithTheRaftToTheWreckToAcquireEquipment extends WithTheRaftToTheWreck {
    public function __construct() {
        parent::__construct(2,
                            new Equipment());
    }
}