<?php

namespace ZipVole\GameTraits;

use ZipVole\GameStateEntry;

trait GameWithState {
    use GameWithStateOrOptions;

    protected array $gameStateEntries;

    protected function gameStateLabels() {
        return array_reduce(
            $this->gameStateEntries,
            function (array          $gameStateLabels,
                      GameStateEntry $gameStateEntry) {
                $gameStateLabels[$gameStateEntry->name] = $gameStateEntry->id;

                return $gameStateLabels;
            },
            [],
        );
    }

    protected function setUpGameState() {
        foreach ($this->gameStateEntries as $gameStateEntry) {
            $this->initializeGameStateFor($gameStateEntry);
        }
    }

    private function initializeGameStateFor(GameStateEntry $gameStateEntry) {
        if ($gameStateEntry->hasStaticInitialValue()) {
            $this->setGameStateInitialValue($gameStateEntry->name,
                                            $gameStateEntry->initialValue);
        }
    }
}