<?php

namespace Cards\Aging\Normal;

use Cards\Aging\NormalAging;

class VeryStupid extends NormalAging
{
    public function __construct()
    {
        parent::__construct(1,
                            "Very Stupid",
                            -3);
    }

    public function getHowManyInDeck(int $level): int
    {
        return $level < 3 ? 0 : 1;
    }
}