<?php

namespace AgingCards\NormalAgingCards;

class Hungry extends NormalAging
{
    public function __construct()
    {
        parent::__construct("Hungry", 0, new LoseLife(1));
    }
}