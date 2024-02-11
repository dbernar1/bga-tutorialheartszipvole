<?php

namespace AgingCards\NormalAgingCards;

use BgaHelpers\CardCreationSpec;

class VeryStupid extends NormalAging
{
    public static int $typeArg = 5;
    public static int $howManyInDeck = 1;

    public function __construct()
    {
        parent::__construct("Very Stupid", -3);
    }

    public static function cardCreationSpec(): CardCreationSpec
    {
        return (new CardCreationSpec(parent::$type,
                                     self::$typeArg,
                                     self::$howManyInDeck));
    }
}