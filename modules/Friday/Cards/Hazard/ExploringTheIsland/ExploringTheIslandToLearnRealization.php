<?php

namespace Friday\Cards\Hazard\ExploringTheIsland;

use Friday\Cards\Hazard\KnowledgeSides\Realization;

class ExploringTheIslandToLearnRealization extends ExploringTheIsland {
    public function __construct() {
        parent::__construct(1,
                            new Realization(1));
    }
}