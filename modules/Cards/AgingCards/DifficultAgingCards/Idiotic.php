<?php

namespace AgingCards\DifficultAgingCards;

use BgaHelpers\CardCreationSpec;

class Idiotic extends DifficultAging
{
    public static int $typeArg = 1;
    public static int $howManyInDeck = 1;

    public function __construct()
    {
        parent::__construct("Idiotic", -4);
    }

    public static function cardCreationSpec(): CardCreationSpec
    {
        return (new CardCreationSpec(parent::$type,
                                     self::$typeArg,
                                     self::$howManyInDeck));
    }
}