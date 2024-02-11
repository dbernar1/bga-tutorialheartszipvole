<?php

namespace HazardCards\KnowledgeSides;

class Weapon extends KnowledgeSide
{
    public function __construct(int $fightingValue)
    {
        parent::__construct("Weapon", $fightingValue);
    }
}