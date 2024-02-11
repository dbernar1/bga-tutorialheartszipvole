<?php

namespace Cards\Aging\Difficult;

use Cards\Aging\DifficultAging;

class Idiotic extends DifficultAging
{
    public function __construct()
    {
        parent::__construct(1,
                            "Idiotic",
                            -4);
    }
}