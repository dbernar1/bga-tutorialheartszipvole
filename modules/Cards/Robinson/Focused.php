<?php

namespace Cards\Robinson;

use BgaHelpers\CardCreationSpec;

class Focused extends Robinson
{
    public static int $typeArg = 3;
    public static int $howManyInDeck = 3;

    public function __construct()
    {
        parent::__construct("Focused", 1);
    }

    public static function cardCreationSpec(): CardCreationSpec
    {
        return (new CardCreationSpec(parent::$type,
                                     self::$typeArg,
                                     self::$howManyInDeck));
    }
}