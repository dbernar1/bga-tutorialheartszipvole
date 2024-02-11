<?php

namespace Cards\Aging\Normal;

use Cards\Aging\NormalAging;
use SpecialAbilities\Negative\StopDrawingFreeCards;

class VeryTired extends NormalAging
{
    public function __construct()
    {
        parent::__construct(1,
                            "Very Tired",
                            0,
                            new StopDrawingFreeCards());
    }
}