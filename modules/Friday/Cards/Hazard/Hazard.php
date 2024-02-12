<?php

namespace Friday\Cards\Hazard;

use Friday\Cards\Fighting;
use Friday\Cards\Hazard\KnowledgeSides\KnowledgeSide;

class Hazard extends Fighting {
    const CARD_TYPE = "Hazard";
    public string $hazardTitle;
    public int $freeCardsToDraw;
    public PointsNeededToWinHazard $pointsNeededToWin;

    public function __construct(int                     $howManyInDeck,
                                string                  $hazardTitle,
                                int                     $freeCardsToDraw,
                                PointsNeededToWinHazard $pointsNeededToWin,
                                KnowledgeSide           $knowledgeSide) {
        parent::__construct(self::CARD_TYPE,
                            $howManyInDeck,
                            $knowledgeSide->title,
                            $knowledgeSide->fightingValue,
                            1,
                            $knowledgeSide->specialAbility);

        $this->hazardTitle = $hazardTitle;
        $this->freeCardsToDraw = $freeCardsToDraw;
        $this->pointsNeededToWin = $pointsNeededToWin;
    }
}