<?php

namespace AgingCards\NormalAgingCards;

use BgaHelpers\CardCreationSpec;

class Stupid extends NormalAging
{
    public static int $typeArg = 4;
    public static int $howManyInDeck = 2;

    public function __construct()
    {
        parent::__construct("Stupid", -2);
    }

    public static function cardCreationSpec(): CardCreationSpec
    {
        return (new CardCreationSpec(parent::$type,
                                     self::$typeArg,
                                     self::$howManyInDeck));
    }
}