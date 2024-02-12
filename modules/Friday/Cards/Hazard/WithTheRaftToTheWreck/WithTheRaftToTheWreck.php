<?php

namespace Friday\Cards\Hazard\WithTheRaftToTheWreck;

use Friday\Cards\Hazard\Hazard;
use Friday\Cards\Hazard\KnowledgeSides\KnowledgeSide;
use Friday\Cards\Hazard\PointsNeededToWinHazard;

class WithTheRaftToTheWreck extends Hazard {
    public function __construct(int           $howManyInDeck,
                                KnowledgeSide $knowledgeSide) {
        parent::__construct($howManyInDeck,
                            "With the raft to the wreck",
                            1,
                            new PointsNeededToWinHazard(0,
                                                        1,
                                                        3),
                            $knowledgeSide);
    }
}