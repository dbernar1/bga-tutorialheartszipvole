<?php

namespace Friday\Cards\Aging\Normal;

use Friday\Cards\Aging\NormalAging;

class Stupid extends NormalAging {
    public function __construct() {
        parent::__construct(2,
                            "Stupid",
                            -2);
    }
}