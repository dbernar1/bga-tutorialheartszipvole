<?php

namespace Cards\Hazard\WithTheRaftToTheWreck;

use Cards\Hazard\KnowledgeSides\Mimicry;

class WithTheRaftToTheWreckToLearnMimicry extends WithTheRaftToTheWreck
{
    public function __construct()
    {
        parent::__construct(1,
                            new Mimicry(0));
    }
}