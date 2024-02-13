<?php

namespace ZipVole\GameTraits;

use ZipVole\CardDeck;

trait GameWithCards {
    public array $cardDecks;

    public function initializeDecks() {
        foreach ($this->cardDecks as $deck) {
            $this->initializeBgaDeck($deck);
        }
    }

    protected function initializeBgaDeck(CardDeck $deck) {
        $deck->bgaDeck = $this->getNew("module.common.deck");
        $deck->bgaDeck->init($deck->dbTableName);
    }

    public function createDecks() {
        foreach ($this->cardDecks as $cardDeck) {
            $this->createDeck($cardDeck);
        }
    }

    private function createDeck(CardDeck $cardDeck) {
        $cardDeck->createBgaDeck(property_exists($this, "gameOptions") ? $this->gameOptions : []);
    }
}
