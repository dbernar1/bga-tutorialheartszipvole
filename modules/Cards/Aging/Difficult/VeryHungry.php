<?php

namespace Cards\Aging\Difficult;

use Cards\Aging\DifficultAging;
use SpecialAbilities\Negative\LoseLife;

class VeryHungry extends DifficultAging
{

    public function __construct()
    {
        parent::__construct(1,
                            "Very Hungry",
                            0,
                            new LoseLife(2));
    }
}