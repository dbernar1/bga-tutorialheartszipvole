<?php

namespace Cards\Hazard\FurtherExploringTheIsland;

use Cards\Hazard\Hazard;
use Cards\Hazard\KnowledgeSides\KnowledgeSide;
use Cards\Hazard\PointsNeededToWinHazard;

class FurtherExploringTheIsland extends Hazard
{
    public function __construct(int           $howManyInDeck,
                                KnowledgeSide $knowledgeSide)
    {
        parent::__construct($howManyInDeck,
                            "Further exploring the island",
                            3,
                            new PointsNeededToWinHazard(2,
                                                        5,
                                                        8),
                            $knowledgeSide);
    }
}