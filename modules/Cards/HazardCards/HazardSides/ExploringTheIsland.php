<?php

namespace HazardCards\HazardSides;

use HazardCards\PointsNeededToWinHazard;

class ExploringTheIsland extends HazardSide
{

    public function __construct()
    {
        parent::__construct("Exploring the island",
                            2,
                            new PointsNeededToWinHazard(1,
                                                        3,
                                                        6));
    }
}