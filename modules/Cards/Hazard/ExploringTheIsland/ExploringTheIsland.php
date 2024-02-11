<?php

namespace Cards\Hazard\ExploringTheIsland;

use Cards\Hazard\Hazard;
use Cards\Hazard\KnowledgeSides\KnowledgeSide;
use Cards\Hazard\PointsNeededToWinHazard;

class ExploringTheIsland extends Hazard
{
    public function __construct(int           $howManyInDeck,
                                KnowledgeSide $knowledgeSide)
    {
        parent::__construct($howManyInDeck,
                            "Exploring the island",
                            2,
                            new PointsNeededToWinHazard(1,
                                                        3,
                                                        6),
                            $knowledgeSide);
    }
}