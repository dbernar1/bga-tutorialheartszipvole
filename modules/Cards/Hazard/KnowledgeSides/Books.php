<?php

namespace Cards\Hazard\KnowledgeSides;

use SpecialAbilities\Positive\PreviousPhase;

class Books extends KnowledgeSide
{
    public function __construct()
    {
        parent::__construct("Books", 0, new PreviousPhase());
    }
}