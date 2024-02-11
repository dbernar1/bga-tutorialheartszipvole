<?php

namespace SpecialAbilities\NegativeSpecialAbilities;

class LoseLife extends NegativeSpecialAbility
{
    public int $numLives;

    public function __construct(int $numLives)
    {
        $this->numLives = $numLives;
    }
}