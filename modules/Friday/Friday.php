<?php

namespace Friday;

use Table;
use ZipVole\CardDeck;
use ZipVole\GameTraits\GameWithCards;
use ZipVole\GameTraits\GameWithStateAndOptions;

abstract class Game {
    public Table $table;

    public function __construct(Table $table) {
        $this->table = $table;
    }

    public function initialize() {
        if (method_exists($this, "initializeGameState")) {
            $this->initializeGameState();
        }

        if (method_exists($this, "initializeDecks")) {
            $this->initializeDecks();
        }
    }

    public function setUpGame() {
        if (method_exists($this, "setUpGameState")) {
            $this->setUpGameState();
        }

        if (method_exists($this, "getSelectedOptionValues")) {
            $this->getSelectedOptionValues();
        }

        if (method_exists($this, "initializeGameStateDependingOnSelectedOptions")) {
            $this->initializeGameStateDependingOnSelectedOptions();
        }

        if (method_exists($this, 'createDecks')) {
            $this->createDecks();
        }
    }

    abstract public function enhanceAllDatasResult(array  &$result,
                                                   string $currentPlayerId);

}

class Friday extends Game {
    use GameWithStateAndOptions;
    use GameWithCards;

    public function __construct(Table $game) {
        parent::__construct($game);
        $this->gameStateEntries = require "./modules/Friday/game_states.php";
        $this->gameOptions = require "./modules/Friday/options.php";
        $this->cardDecks = [
            'all_fighting_cards' => new CardDeck('card', require "./fighting_cards.php"),
        ];
    }

    public function enhanceAllDatasResult(array  &$result,
                                          string $currentPlayerId) {
        $result['cards'] = $this->cardDecks['all_fighting_cards']->getCardsInLocation('Robinson');
        $result['pirate_cards'] = [
            $this->gameStateEntries[ONE_PIRATE_CARD_NUMBER],
            $this->gameStateEntries[OTHER_PIRATE_CARD_NUMBER],
        ];
    }

}