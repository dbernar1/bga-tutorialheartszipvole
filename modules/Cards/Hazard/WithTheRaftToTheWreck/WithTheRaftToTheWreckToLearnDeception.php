<?php

namespace Cards\Hazard\WithTheRaftToTheWreck;

use Cards\Hazard\KnowledgeSides\Deception;

class WithTheRaftToTheWreckToLearnDeception extends WithTheRaftToTheWreck
{
    public function __construct()
    {
        parent::__construct(1,
                            new Deception(0));
    }
}