<?php

namespace Friday\Cards\Hazard\KnowledgeSides;

class Weapon extends KnowledgeSide {
    public function __construct(int $fightingValue) {
        parent::__construct("Weapon", $fightingValue);
    }
}