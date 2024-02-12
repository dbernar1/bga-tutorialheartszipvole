<?php

namespace Friday\Cards\Hazard\ExploringTheIsland;

use Friday\Cards\Hazard\KnowledgeSides\Deception;

class ExploringTheIslandToLearnDeception extends ExploringTheIsland {
    public function __construct() {
        parent::__construct(1,
                            new Deception(1));
    }
}