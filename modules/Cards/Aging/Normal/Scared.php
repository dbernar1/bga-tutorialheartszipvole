<?php

namespace Cards\Aging\Normal;

use Cards\Aging\NormalAging;
use SpecialAbilities\Negative\NullifyHighestCard;

class Scared extends NormalAging
{
    public function __construct()
    {
        parent::__construct(2,
                            "Scared",
                            0,
                            new NullifyHighestCard());
    }
}