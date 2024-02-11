<?php

namespace AgingCards\NormalAgingCards;

use BgaHelpers\CardCreationSpec;
use SpecialAbilities\NegativeSpecialAbilities\LoseLife;

class Hungry extends NormalAging
{
    public static int $typeArg = 2;
    public static int $howManyInDeck = 1;

    public function __construct()
    {
        parent::__construct("Hungry", 0, new LoseLife(1));
    }

    public static function cardCreationSpec(): CardCreationSpec
    {
        return (new CardCreationSpec(parent::$type,
                                     self::$typeArg,
                                     self::$howManyInDeck));
    }
}