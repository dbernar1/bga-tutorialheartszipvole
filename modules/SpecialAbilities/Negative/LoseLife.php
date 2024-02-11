<?php

namespace SpecialAbilities\Negative;

class LoseLife extends NegativeSpecialAbility
{
    public int $numLives;

    public function __construct(int $numLives)
    {
        $this->numLives = $numLives;
    }
}