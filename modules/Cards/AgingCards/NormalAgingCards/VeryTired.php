<?php

namespace AgingCards\NormalAgingCards;

use BgaHelpers\CardCreationSpec;
use SpecialAbilities\NegativeSpecialAbilities\StopDrawingFreeCards;

class VeryTired extends NormalAging
{
    public static int $typeArg = 1;
    public static int $howManyInDeck = 5;

    public function __construct()
    {
        parent::__construct("Very Tired", 0, new StopDrawingFreeCards());
    }

    public static function cardCreationSpec(): CardCreationSpec
    {
        return (new CardCreationSpec(parent::$type,
                                     self::$typeArg,
                                     self::$howManyInDeck));
    }
}