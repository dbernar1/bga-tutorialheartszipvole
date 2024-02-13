<?php

namespace ZipVole;

class Card {
    public string $cardType;
    public int $howManyInDeck;

    public function __construct(string $cardType,
                                int    $howManyInDeck) {
        $this->cardType = $cardType;
        $this->howManyInDeck = $howManyInDeck;
    }

    public function getHowManyInDeck(int $level): int {
        return $this->howManyInDeck;
    }

    public function getCardCreateSpec(array $gameOptions,
                                      int   $typeArg): array {
        return [
            "type" => $this->cardType,
            "type_arg" => $typeArg,
            "nbr" => $this->getHowManyInDeck($gameOptions[OPTION_LEVEL]->selectedValue),
        ];
    }
}