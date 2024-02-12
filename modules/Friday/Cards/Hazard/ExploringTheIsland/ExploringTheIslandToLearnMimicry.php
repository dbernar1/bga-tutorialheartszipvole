<?php

namespace Friday\Cards\Hazard\ExploringTheIsland;

use Friday\Cards\Hazard\KnowledgeSides\Mimicry;

class ExploringTheIslandToLearnMimicry extends ExploringTheIsland {
    public function __construct() {
        parent::__construct(1,
                            new Mimicry(1));
    }
}