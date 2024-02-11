<?php

namespace Cards\Hazard\WithTheRaftToTheWreck;

use Cards\Hazard\KnowledgeSides\Books;

class WithTheRaftToTheWreckToAcquireBooks extends WithTheRaftToTheWreck
{
    public function __construct()
    {
        parent::__construct(1,
                            new Books());
    }
}