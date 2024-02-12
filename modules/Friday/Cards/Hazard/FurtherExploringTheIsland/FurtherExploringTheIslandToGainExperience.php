<?php

namespace Friday\Cards\Hazard\FurtherExploringTheIsland;

use Friday\Cards\Hazard\KnowledgeSides\Experience;

class FurtherExploringTheIslandToGainExperience extends FurtherExploringTheIsland {
    public function __construct() {
        parent::__construct(1,
                            new Experience(2));
    }
}