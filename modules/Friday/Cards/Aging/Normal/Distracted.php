<?php

namespace Friday\Cards\Aging\Normal;

use Friday\Cards\Aging\NormalAging;

class Distracted extends NormalAging {
    public function __construct() {
        parent::__construct(1,
                            "Distracted",
                            -1);
    }
}