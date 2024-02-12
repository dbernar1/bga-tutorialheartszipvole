<?php

namespace Friday\Cards\Hazard\ExploringTheIsland;

use Friday\Cards\Hazard\KnowledgeSides\Repeat;

class ExploringTheIslandToLearnRepeat extends ExploringTheIsland {
    public function __construct() {
        parent::__construct(1,
                            new Repeat(1));
    }
}