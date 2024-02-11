<?php

namespace Cards\Hazard\ExploringTheIsland;

use Cards\Hazard\KnowledgeSides\Realization;

class ExploringTheIslandToLearnRealization extends ExploringTheIsland
{
    public function __construct()
    {
        parent::__construct(1,
                            new Realization(1));
    }
}