<?php

namespace HazardCards\HazardSides;

use HazardCards\PointsNeededToWinHazard;

class WithTheRaftToTheWreck extends HazardSide
{
    public function __construct()
    {
        parent::__construct("With the raft to the wreck",
                            1,
                            new PointsNeededToWinHazard(0, 1, 3));
    }
}