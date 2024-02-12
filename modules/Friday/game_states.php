<?php

use ZipVole\GameStateEntry;

function getTwoRandomPirateCards(): array {
    $pirate_cards = require('./pirate_cards.php');

    $onePirateCardNumber = array_rand(array_keys($pirate_cards));
    $otherPirateCardNumber = $onePirateCardNumber;

    while ($otherPirateCardNumber === $onePirateCardNumber) {
        $otherPirateCardNumber = array_rand(array_keys($pirate_cards));
    }

    return [$onePirateCardNumber, $otherPirateCardNumber];
}

if (!defined('CURRENT_PHASE')) {
    define('CURRENT_PHASE', 'CURRENT_PHASE');
    define('REMAINING_LIVES', 'REMAINING_LIVES');
    define('SPARE_LIVES', 'SPARE_LIVES');
    define('ONE_PIRATE_CARD', 'ONE_PIRATE_CARD');
    define('OTHER_PIRATE_CARD', 'OTHER_PIRATE_CARD');

    // TODO: Probably not like this
    [$onePirateCardNumber, $otherPirateCardNumber] = getTwoRandomPirateCards();
    define('ONE_PIRATE_CARD_NUMBER', $onePirateCardNumber);
    define('OTHER_PIRATE_CARD_NUMBER', $otherPirateCardNumber);

    define('GREEN_PHASE', '1');
    define('YELLOW_PHASE', '2');
    define('RED_PHASE', '3');
    define('PIRATE_PHASE', '4');
}

return [
    new GameStateEntry(10, CURRENT_PHASE, GREEN_PHASE),
    new GameStateEntry(11, REMAINING_LIVES, null, fn($options) => $options[OPTION_LEVEL]->selectedValue),
    new GameStateEntry(12, SPARE_LIVES, 2),
    new GameStateEntry(13, ONE_PIRATE_CARD, ONE_PIRATE_CARD_NUMBER),
    new GameStateEntry(14, OTHER_PIRATE_CARD, OTHER_PIRATE_CARD_NUMBER),
];