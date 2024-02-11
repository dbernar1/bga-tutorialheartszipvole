<?php

namespace Cards\Hazard\FurtherExploringTheIsland;

use Cards\Hazard\KnowledgeSides\Realization;

class FurtherExploringTheIslandToLearnRealization extends FurtherExploringTheIsland
{
    public function __construct()
    {
        parent::__construct(1,
                            new Realization(2));
    }
}