<?php

namespace Friday\Cards;

use Friday\SpecialAbilities\SpecialAbility;
use ZipVole\Card;

class Fighting extends Card {
    public string $title;
    public int $fightingValue;
    public int $destructionCost;
    public SpecialAbility $specialAbility;

    public function __construct(string         $cardType,
                                int            $howManyInDeck,
                                string         $title,
                                int            $fightingValue,
                                int            $destructionCost,
                                SpecialAbility $specialAbility = null) {
        parent::__construct($cardType, $howManyInDeck);
        $this->title = $title;
        $this->fightingValue = $fightingValue;
        $this->destructionCost = $destructionCost;
        $this->specialAbility = $specialAbility;
    }
}