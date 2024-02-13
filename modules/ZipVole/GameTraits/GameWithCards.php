<?php

namespace ZipVole\GameTraits;

use Table;
use ZipVole\CardDeck;

trait GameWithCards {
    protected array $cardDecks;

    protected function initializeDecks() {
        foreach ($this->cardDecks as $deck) {
            $this->initializeBgaDeck($deck);
        }
    }

    protected function initializeBgaDeck(CardDeck $deck) {
        $deck->bgaDeck = Table::getNew("module.common.deck");
        $deck->bgaDeck->init($deck->dbTableName);
    }

    protected function createDecks() {
        foreach ($this->cardDecks as $cardDeck) {
            $this->createDeck($cardDeck);
        }
    }

    private function createDeck(CardDeck $cardDeck) {
        $cardDeck->createBgaDeck(property_exists($this, "gameOptions") ? $this->gameOptions : []);
    }
}
