<?php

namespace ZipVole;

use Deck;

class CardDeck {
    public Deck $bgaDeck;
    public string $dbTableName;

    public array $cards;


    public function __construct(string $dbTableName,
                                array  $cards) {
        $this->dbTableName = $dbTableName;
        $this->cards = $cards;
    }

    public function createBgaDeck(array $gameOptions) {
        foreach ($this->cards as $locationName => $cardsForLocation) {
            $this->bgaDeck->createCards(
                array_map(fn(Card $card,
                             int  $typeArg) => $card->getCardCreateSpec($gameOptions, $typeArg),
                    $cardsForLocation,
                    array_keys($cardsForLocation)),
                $locationName);

            $this->bgaDeck->shuffle($locationName);
        }
    }
}