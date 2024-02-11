<?php

namespace Cards\RobinsonCards;

class Eating extends Robinson
{
    public function __construct()
    {
        parent::__construct("Eating", 0, new GainLife(2));
    }
}