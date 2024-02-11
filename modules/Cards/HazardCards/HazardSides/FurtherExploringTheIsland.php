<?php

namespace HazardCards\HazardSides;

use HazardCards\PointsNeededToWinHazard;

class FurtherExploringTheIsland extends HazardSide
{
    public function __construct()
    {
        parent::__construct("Further exploring the island",
                            3,
                            new PointsNeededToWinHazard(2,
                                                        5,
                                                        8));
    }
}