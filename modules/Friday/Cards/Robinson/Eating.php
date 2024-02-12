<?php

namespace Friday\Cards\Robinson;

use Friday\SpecialAbilities\Positive\GainLife;

class Eating extends Robinson {
    public function __construct() {
        parent::__construct(1,
                            "Eating",
                            0,
                            new GainLife(2));
    }
}