<?php

namespace AgingCards\NormalAgingCards;

use SpecialAbilities\NegativeSpecialAbilities\StopDrawingFreeCards;

class VeryTired extends NormalAging
{
    public function __construct()
    {
        parent::__construct("Very Tired", 0, new StopDrawingFreeCards());
    }
}