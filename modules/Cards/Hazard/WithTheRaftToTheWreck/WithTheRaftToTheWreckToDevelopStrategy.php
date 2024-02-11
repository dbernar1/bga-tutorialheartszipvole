<?php

namespace Cards\Hazard\WithTheRaftToTheWreck;

use Cards\Hazard\KnowledgeSides\Strategy;

class WithTheRaftToTheWreckToDevelopStrategy extends WithTheRaftToTheWreck
{
    public function __construct()
    {
        parent::__construct(2,
                            new Strategy(0, 2));
    }
}