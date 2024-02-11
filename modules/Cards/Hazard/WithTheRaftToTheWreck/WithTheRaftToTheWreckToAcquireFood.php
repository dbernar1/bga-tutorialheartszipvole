<?php

namespace Cards\Hazard\WithTheRaftToTheWreck;

use Cards\Hazard\KnowledgeSides\Food;

class WithTheRaftToTheWreckToAcquireFood extends WithTheRaftToTheWreck
{
    public function __construct()
    {
        parent::__construct(2,
                            new Food(0));
    }
}