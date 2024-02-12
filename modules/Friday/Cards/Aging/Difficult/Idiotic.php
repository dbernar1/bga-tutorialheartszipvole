<?php

namespace Friday\Cards\Aging\Difficult;

use Friday\Cards\Aging\DifficultAging;

class Idiotic extends DifficultAging {
    public function __construct() {
        parent::__construct(1,
                            "Idiotic",
                            -4);
    }
}