<?php

namespace Cards;

class Pirate extends Card
{
    const CARD_TYPE = 'Pirate';
    public int $freeCardsToDraw;
    public int $pointsNeededToWin;

    function __construct(int $freeCardsToDraw,
                         int $pointsNeededToWin)
    {
        parent::__construct(self::CARD_TYPE, 1);

        $this->freeCardsToDraw = $freeCardsToDraw;
        $this->pointsNeededToWin = $pointsNeededToWin;
    }
}