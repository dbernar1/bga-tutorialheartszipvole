<?php

namespace AgingCards\DifficultAgingCards;

use BgaHelpers\CardCreationSpec;
use SpecialAbilities\NegativeSpecialAbilities\LoseLife;

class VeryHungry extends DifficultAging
{
    public static int $typeArg = 3;
    public static int $howManyInDeck = 1;

    public function __construct()
    {
        parent::__construct("Very Hungry", 0, new LoseLife(2));
    }

    public static function cardCreationSpec(): CardCreationSpec
    {
        return (new CardCreationSpec(parent::$type,
                                     self::$typeArg,
                                     self::$howManyInDeck));
    }
}