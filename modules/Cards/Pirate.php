<?php

namespace Card;

class Pirate
{
    public int $freeCardsToDraw;
    public int $pointsNeededToWin;

    function __construct(int $freeCardsToDraw, int $pointsNeededToWin)
    {
        $this->freeCardsToDraw = $freeCardsToDraw;
        $this->pointsNeededToWin = $pointsNeededToWin;
    }
}