<?php

namespace Friday\Cards\Aging\Normal;

use Friday\Cards\Aging\NormalAging;
use Friday\SpecialAbilities\Negative\LoseLife;

class Hungry extends NormalAging {
    public function __construct() {
        parent::__construct(1,
                            "Hungry",
                            0,
                            new LoseLife(1));
    }
}