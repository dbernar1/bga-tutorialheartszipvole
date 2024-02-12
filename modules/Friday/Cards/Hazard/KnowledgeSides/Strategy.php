<?php

namespace Friday\Cards\Hazard\KnowledgeSides;

use Friday\SpecialAbilities\Positive\Exchange;

class Strategy extends KnowledgeSide {
    public function __construct(int $fightingValue,
                                int $cardsToExchange) {
        parent::__construct("Strategy", $fightingValue, new Exchange($cardsToExchange));
    }
}