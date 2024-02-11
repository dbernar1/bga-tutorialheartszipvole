<?php

namespace Cards\Robinson;

use BgaHelpers\CardCreationSpec;

class Weak extends Robinson
{
    public static int $typeArg = 2;
    public static int $howManyInDeck = 8;

    public function __construct()
    {
        parent::__construct("Weak", 0);
    }

    public static function cardCreationSpec(): CardCreationSpec
    {
        return (new CardCreationSpec(parent::$type,
                                     self::$typeArg,
                                     self::$howManyInDeck));
    }
}