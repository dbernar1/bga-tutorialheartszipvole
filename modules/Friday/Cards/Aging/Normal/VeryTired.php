<?php

namespace Friday\Cards\Aging\Normal;

use Friday\Cards\Aging\NormalAging;
use Friday\SpecialAbilities\Negative\StopDrawingFreeCards;

class VeryTired extends NormalAging {
    public function __construct() {
        parent::__construct(1,
                            "Very Tired",
                            0,
                            new StopDrawingFreeCards());
    }
}