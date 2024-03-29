<?php

namespace Friday\Cards\Hazard\KnowledgeSides;

use Friday\SpecialAbilities\SpecialAbility;

class KnowledgeSide {
    public string $title;
    public int $fightingValue;
    public ?SpecialAbility $specialAbility;

    public function __construct(string          $title,
                                int             $fightingValue,
                                ?SpecialAbility $specialAbility = null) {
        $this->title = $title;
        $this->fightingValue = $fightingValue;
        $this->specialAbility = $specialAbility;
    }
}