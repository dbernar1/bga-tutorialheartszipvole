<?php

namespace Friday\SpecialAbilities\Positive;

class GainLife extends PositiveSpecialAbility {
    public int $numLives;

    public function __construct(int $numLives) {
        $this->numLives = $numLives;
    }

}