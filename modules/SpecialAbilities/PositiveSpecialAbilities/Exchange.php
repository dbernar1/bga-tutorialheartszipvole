<?php

namespace SpecialAbilities\PositiveSpecialAbilities;

class Exchange extends PositiveSpecialAbility
{
    public int $cardsToExchange;

    public function __construct(int $cardsToExchange)
    {
        $this->cardsToExchange = $cardsToExchange;
    }


}