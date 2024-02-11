<?php

namespace Cards;

class Card
{
    public string $cardType;
    public int $howManyInDeck;

    public function __construct(string $cardType,
                                int    $howManyInDeck)
    {
        $this->cardType = $cardType;
        $this->howManyInDeck = $howManyInDeck;
    }

    public function getHowManyInDeck(int $level): int
    {
        return $this->howManyInDeck;
    }
}