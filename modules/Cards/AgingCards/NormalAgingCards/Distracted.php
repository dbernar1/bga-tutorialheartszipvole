<?php

namespace AgingCards\NormalAgingCards;

use BgaHelpers\CardCreationSpec;

class Distracted extends NormalAging
{
    public static int $typeArg = 1;
    public static int $howManyInDeck = 1;

    public function __construct()
    {
        parent::__construct("Distracted", -1);
    }

    public static function cardCreationSpec(): CardCreationSpec
    {
        return (new CardCreationSpec(parent::$type,
                                     self::$typeArg,
                                     self::$howManyInDeck));
    }
}