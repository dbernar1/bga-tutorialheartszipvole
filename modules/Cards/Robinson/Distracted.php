<?php

namespace Cards\Robinson;

use BgaHelpers\CardCreationSpec;

class Distracted extends Robinson
{
    public static int $typeArg = 1;
    public static int $howManyInDeck = 5;

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