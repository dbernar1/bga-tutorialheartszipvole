<?php

namespace Cards\Aging\Normal;

use Cards\Aging\NormalAging;
use SpecialAbilities\Negative\LoseLife;

class Hungry extends NormalAging
{
    public function __construct()
    {
        parent::__construct(1,
                            "Hungry",
                            0,
                            new LoseLife(1));
    }
}