<?php

namespace AgingCards\DifficultAgingCards;

use BgaHelpers\CardCreationSpec;

class Suicidal extends DifficultAging
{
    public static int $typeArg = 2;
    public static int $howManyInDeck = 1;

    public function __construct()
    {
        parent::__construct("Suicidal", -5);
    }

    public static function cardCreationSpec(): CardCreationSpec
    {
        return (new CardCreationSpec(parent::$type,
                                     self::$typeArg,
                                     self::$howManyInDeck));
    }
}