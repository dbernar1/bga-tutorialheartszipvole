<?php

namespace Cards\Hazard\WithTheRaftToTheWreck;

use Cards\Hazard\KnowledgeSides\Equipment;

class WithTheRaftToTheWreckToAcquireEquipment extends WithTheRaftToTheWreck
{
    public function __construct()
    {
        parent::__construct(2,
                            new Equipment());
    }
}