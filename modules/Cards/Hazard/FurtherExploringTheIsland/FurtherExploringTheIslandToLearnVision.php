<?php

namespace Cards\Hazard\FurtherExploringTheIsland;

use Cards\Hazard\KnowledgeSides\Vision;

class FurtherExploringTheIslandToLearnVision extends FurtherExploringTheIsland
{
    public function __construct()
    {
        parent::__construct(1,
                            new Vision(2));
    }
}