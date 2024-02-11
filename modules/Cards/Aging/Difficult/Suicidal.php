<?php

namespace Cards\Aging\Difficult;

use Cards\Aging\DifficultAging;

class Suicidal extends DifficultAging
{
    public function __construct()
    {
        parent::__construct(1,
                            "Suicidal",
                            -5);
    }
}