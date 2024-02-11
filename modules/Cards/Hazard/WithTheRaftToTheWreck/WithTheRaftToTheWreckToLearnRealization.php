<?php

namespace Cards\Hazard\WithTheRaftToTheWreck;

use Cards\Hazard\KnowledgeSides\Equipment;

class WithTheRaftToTheWreckToLearnRealization extends WithTheRaftToTheWreck
{
    public function __construct()
    {
        parent::__construct(1,
                            new Equipment());
    }
}