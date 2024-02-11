<?php

namespace Cards\Hazard\FurtherExploringTheIsland;

use Cards\Hazard\KnowledgeSides\Strategy;

class FurtherExploringTheIslandToLearnStrategy extends FurtherExploringTheIsland
{
    public function __construct()
    {
        // TODO: Possibly one file with the spec of how many of each card there are?
        parent::__construct(1,
                            new Strategy(2,
                                         1));
    }
}