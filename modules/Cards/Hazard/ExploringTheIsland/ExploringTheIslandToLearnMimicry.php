<?php

namespace Cards\Hazard\ExploringTheIsland;

use Cards\Hazard\KnowledgeSides\Mimicry;

class ExploringTheIslandToLearnMimicry extends ExploringTheIsland
{
    public function __construct()
    {
        parent::__construct(1,
                            new Mimicry(1));
    }
}