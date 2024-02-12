<?php

namespace Friday\Cards\Aging\Normal;

use Friday\Cards\Aging\NormalAging;
use Friday\SpecialAbilities\Negative\NullifyHighestCard;

class Scared extends NormalAging {
    public function __construct() {
        parent::__construct(2,
                            "Scared",
                            0,
                            new NullifyHighestCard());
    }
}