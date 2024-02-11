<?php

namespace Cards\Hazard\FurtherExploringTheIsland;

use Cards\Hazard\KnowledgeSides\Food;

class FurtherExploringTheIslandToAcquireFood extends FurtherExploringTheIsland
{
    public function __construct()
    {
        parent::__construct(1,
                            new Food(2));
    }
}