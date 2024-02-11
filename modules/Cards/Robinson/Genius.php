<?php

namespace Cards\Robinson;

use BgaHelpers\CardCreationSpec;

class Genius extends Robinson
{
    public static int $typeArg = 4;
    public static int $howManyInDeck = 1;

    public function __construct()
    {
        parent::__construct("Genius", 2);
    }

    public static function cardCreationSpec(): CardCreationSpec
    {
        return (new CardCreationSpec(parent::$type,
                                     self::$typeArg,
                                     self::$howManyInDeck));
    }
}