<?php

namespace AgingCards\NormalAgingCards;

use BgaHelpers\CardCreationSpec;
use SpecialAbilities\NegativeSpecialAbilities\NullifyHighestCard;

class Scared extends NormalAging
{
    public static int $typeArg = 3;
    public static int $howManyInDeck = 2;

    public function __construct()
    {
        parent::__construct("Scared", 0, new NullifyHighestCard());
    }

    public static function cardCreationSpec(): CardCreationSpec
    {
        return (new CardCreationSpec(parent::$type,
                                     self::$typeArg,
                                     self::$howManyInDeck));
    }
}