<?php

namespace Cards\Robinson;

use BgaHelpers\CardCreationSpec;
use SpecialAbilities\PositiveSpecialAbilities\GainLife;

class Eating extends Robinson
{
    public static int $typeArg = 5;
    public static int $howManyInDeck = 1;

    public function __construct()
    {
        parent::__construct("Eating", 0, new GainLife(2));
    }

    public static function cardCreationSpec(): CardCreationSpec
    {
        return (new CardCreationSpec(parent::$type,
                                     self::$typeArg,
                                     self::$howManyInDeck));
    }
}