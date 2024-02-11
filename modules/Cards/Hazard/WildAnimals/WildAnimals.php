<?php

namespace Cards\Hazard\WildAnimals;

use Cards\Hazard\Hazard;
use Cards\Hazard\KnowledgeSides\KnowledgeSide;
use Cards\Hazard\PointsNeededToWinHazard;

class WildAnimals extends Hazard
{
    public function __construct(int           $howManyInDeck,
                                KnowledgeSide $knowledgeSide)
    {
        parent::__construct($howManyInDeck,
                            "Cannibals",
                            5,
                            new PointsNeededToWinHazard(5,
                                                        9,
                                                        14),
                            $knowledgeSide);
    }
}