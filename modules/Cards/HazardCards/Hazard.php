<?php

namespace HazardCards;

use Cards\Fighting;
use HazardCards\HazardSides\HazardSide;
use HazardCards\KnowledgeSides\KnowledgeSide;

class Hazard extends Fighting
{
    public HazardSide $hazardSide;

    public function __construct(HazardSide    $hazardSide,
                                KnowledgeSide $knowledgeSide)
    {
        parent::__construct($knowledgeSide->title,
                            $knowledgeSide->fightingValue,
                            1,
                            $knowledgeSide->specialAbility);

        $this->hazardSide = $hazardSide;
    }
}