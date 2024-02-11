<?php

namespace SpecialAbilities\PositiveSpecialAbilities;

class GainLife extends PositiveSpecialAbility
{
    public int $numLives;

    public function __construct(int $numLives)
    {
        $this->numLives = $numLives;
    }

}