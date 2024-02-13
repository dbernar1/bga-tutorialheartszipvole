<?php

namespace Friday;

use TutorialHeartsZipvole;
use ZipVole\CardDeck;
use ZipVole\Game;
use ZipVole\GameTraits\GameWithStateAndOptions;

class Friday extends Game {
    use GameWithStateAndOptions;

    private TutorialHeartsZipvole $table;

    public function __construct(TutorialHeartsZipvole $table) {
        parent::__construct($table);
        $this->table = $table;

        $this->gameStateEntries = require "game_states.php";
        $this->gameOptions = require "options.php";
        $this->table->cardDecks['all_fighting_cards'] = new CardDeck('card', require "fighting_cards.php");
    }

    public function enhanceAllDatasResult(array  &$result,
                                          string $currentPlayerId) {
        $result['cards'] = $this->table->cardDecks['all_fighting_cards']->bgaDeck->getCardsInLocation('Robinson');
        $result['pirate_cards'] = [
            $this->gameStateEntries[ONE_PIRATE_CARD_NUMBER],
            $this->gameStateEntries[OTHER_PIRATE_CARD_NUMBER],
        ];
    }

}