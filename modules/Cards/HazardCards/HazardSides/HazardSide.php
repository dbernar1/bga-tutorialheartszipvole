<?php

namespace HazardCards\HazardSides;

use HazardCards\PointsNeededToWinHazard;

class HazardSide
{
    public string $title;
    public int $freeCardsToDraw;
    public PointsNeededToWinHazard $pointsNeededToWin;

    public function __construct(string                  $title,
                                int                     $freeCardsToDraw,
                                PointsNeededToWinHazard $pointsNeededToWin)
    {
        $this->title = $title;
        $this->freeCardsToDraw = $freeCardsToDraw;
        $this->pointsNeededToWin = $pointsNeededToWin;
    }
}