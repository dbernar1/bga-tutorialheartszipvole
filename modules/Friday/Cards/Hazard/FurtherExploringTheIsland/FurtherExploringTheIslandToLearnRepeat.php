<?php

namespace Friday\Cards\Hazard\FurtherExploringTheIsland;

use Friday\Cards\Hazard\KnowledgeSides\Repeat;

class FurtherExploringTheIslandToLearnRepeat extends FurtherExploringTheIsland {
    public function __construct() {
        parent::__construct(1,
                            new Repeat(2));
    }
}