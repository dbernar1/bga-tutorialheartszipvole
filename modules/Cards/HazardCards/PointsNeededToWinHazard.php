<?php

namespace HazardCards;

class PointsNeededToWinHazard
{
    public int $pointsNeededToWinInGreenPhase;
    public int $pointsNeededToWinInYellowPhase;
    public int $pointsNeededToWinInRedPhase;

    public function __construct(int $pointsNeededToWinInGreenPhase, int $pointsNeededToWinInYellowPhase, int $pointsNeededToWinInRedPhase)
    {
        $this->pointsNeededToWinInGreenPhase = $pointsNeededToWinInGreenPhase;
        $this->pointsNeededToWinInYellowPhase = $pointsNeededToWinInYellowPhase;
        $this->pointsNeededToWinInRedPhase = $pointsNeededToWinInRedPhase;
    }


}