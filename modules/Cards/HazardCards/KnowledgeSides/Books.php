<?php

namespace HazardCards\KnowledgeSides;

use SpecialAbilities\PositiveSpecialAbilities\PreviousPhase;

class Books extends KnowledgeSide
{
    public function __construct()
    {
        parent::__construct("Books", 0, new PreviousPhase());
    }
}