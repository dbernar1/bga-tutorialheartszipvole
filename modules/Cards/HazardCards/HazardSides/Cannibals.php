<?php

namespace HazardCards\HazardSides;

use HazardCards\PointsNeededToWinHazard;

class Cannibals extends HazardSide
{
    public function __construct()
    {
        parent::__construct("Cannibals",
                            5,
                            new PointsNeededToWinHazard(5,
                                                        9,
                                                        14));
    }
}