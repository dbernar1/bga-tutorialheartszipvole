<?php

namespace AgingCards\NormalAgingCards;

use SpecialAbilities\NegativeSpecialAbilities\NullifyHighestCard;

class Scared extends NormalAging
{
    public function __construct()
    {
        parent::__construct("Scared", 0, new NullifyHighestCard());
    }
}