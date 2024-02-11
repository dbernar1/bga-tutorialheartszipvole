<?php

namespace AgingCards\DifficultAgingCards;

use SpecialAbilities\NegativeSpecialAbilities\LoseLife;

class VeryHungry extends DifficultAging
{
    public function __construct()
    {
        parent::__construct("Very Hungry", 0, new LoseLife(2));
    }
}