<?php

namespace ZipVole\GameTraits;

use ZipVole\CardDeck;

trait GameWithCards {
    protected array $cardDecks;

    protected function initializeDecks() {
        foreach ($this->cardDecks as $deck) {
            $this->initializeBgaDeck($deck);
        }
    }

    protected function initializeBgaDeck(CardDeck $deck) {
        $deck->bgaDeck = self::getNew("module.common.deck");
        $deck->bgaDeck->init($deck->dbTableName);
    }

    public function toCreateCardsSpec(int $currentGameLevel): array {
        $createCardSpecFor = function (int  $typeArg,
                                       Card $card)
        use
        (
            $currentGameLevel
        ) {
            return [
                "type" => $card->cardType,
                "type_arg" => $typeArg,
                "nbr" => $card->getHowManyInDeck($currentGameLevel),
            ];
        };

        // TODO: Continue this

        return array_merge(
            array_map($createCardSpecFor, $this->robinsonCards),
            array_map($createCardSpecFor, $this->normalAgingCards),
            array_map($createCardSpecFor, $this->difficultAgingCards),
            array_map($createCardSpecFor, $this->pirateCards),
            array_map($createCardSpecFor, $this->hazardCards),
        );
    }
}