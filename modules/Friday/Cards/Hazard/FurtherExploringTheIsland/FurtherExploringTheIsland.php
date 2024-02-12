<?php

namespace Friday\Cards\Hazard\FurtherExploringTheIsland;

use Friday\Cards\Hazard\Hazard;
use Friday\Cards\Hazard\KnowledgeSides\KnowledgeSide;
use Friday\Cards\Hazard\PointsNeededToWinHazard;

class FurtherExploringTheIsland extends Hazard {
    public function __construct(int           $howManyInDeck,
                                KnowledgeSide $knowledgeSide) {
        parent::__construct($howManyInDeck,
                            "Further exploring the island",
                            3,
                            new PointsNeededToWinHazard(2,
                                                        5,
                                                        8),
                            $knowledgeSide);
    }
}