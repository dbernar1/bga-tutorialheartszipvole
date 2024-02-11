<?php

namespace HazardCards\HazardSides;

use HazardCards\PointsNeededToWinHazard;

class WildAnimals extends HazardSide
{
    public function __construct()
    {
        parent::__construct("Wild Animals",
                            4,
                            new PointsNeededToWinHazard(4,
                                                        7,
                                                        11));
    }
}