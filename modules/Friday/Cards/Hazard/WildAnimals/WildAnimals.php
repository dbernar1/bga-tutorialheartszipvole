<?php

namespace Friday\Cards\Hazard\WildAnimals;

use Friday\Cards\Hazard\Hazard;
use Friday\Cards\Hazard\KnowledgeSides\KnowledgeSide;
use Friday\Cards\Hazard\PointsNeededToWinHazard;

class WildAnimals extends Hazard {
    public function __construct(int           $howManyInDeck,
                                KnowledgeSide $knowledgeSide) {
        parent::__construct($howManyInDeck,
                            "Cannibals",
                            5,
                            new PointsNeededToWinHazard(5,
                                                        9,
                                                        14),
                            $knowledgeSide);
    }
}