<?php

namespace Friday\SpecialAbilities\Positive;

class PlusCards extends PositiveSpecialAbility {
    public int $numCards;

    public function __construct(int $numCards) {
        $this->numCards = $numCards;
    }
}