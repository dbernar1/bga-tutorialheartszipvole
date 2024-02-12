<?php

namespace Friday\Cards\Aging\Difficult;

use Friday\Cards\Aging\DifficultAging;

class Suicidal extends DifficultAging {
    public function __construct() {
        parent::__construct(1,
                            "Suicidal",
                            -5);
    }
}