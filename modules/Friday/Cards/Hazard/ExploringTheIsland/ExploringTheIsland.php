<?php

namespace Friday\Cards\Hazard\ExploringTheIsland;

use Friday\Cards\Hazard\Hazard;
use Friday\Cards\Hazard\KnowledgeSides\KnowledgeSide;
use Friday\Cards\Hazard\PointsNeededToWinHazard;

class ExploringTheIsland extends Hazard {
    public function __construct(int           $howManyInDeck,
                                KnowledgeSide $knowledgeSide) {
        parent::__construct($howManyInDeck,
                            "Exploring the island",
                            2,
                            new PointsNeededToWinHazard(1,
                                                        3,
                                                        6),
                            $knowledgeSide);
    }
}