<?php

namespace Cards\Hazard\KnowledgeSides;

use SpecialAbilities\Positive\Exchange;

class Strategy extends KnowledgeSide
{
    public function __construct(int $fightingValue,
                                int $cardsToExchange)
    {
        parent::__construct("Strategy", $fightingValue, new Exchange($cardsToExchange));
    }
}