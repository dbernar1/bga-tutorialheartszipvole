<?php

namespace Friday\Cards\Aging\Difficult;

use Friday\Cards\Aging\DifficultAging;
use Friday\SpecialAbilities\Negative\LoseLife;

class VeryHungry extends DifficultAging {

    public function __construct() {
        parent::__construct(1,
                            "Very Hungry",
                            0,
                            new LoseLife(2));
    }
}