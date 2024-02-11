<?php

namespace SpecialAbilities\PositiveSpecialAbilities;

class PlusCards extends PositiveSpecialAbility
{
    public int $numCards;

    public function __construct(int $numCards)
    {
        $this->numCards = $numCards;
    }
}