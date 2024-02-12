<?php

namespace ZipVole\GameTraits;

use ZipVole\GameStateEntry;

trait GameWithStateAndOptions {
    use GameWithState;
    use GameWithOptions;

    protected function initializeGameStateDependingOnSelectedOptions() {
        foreach ($this->gameStateEntries as $gameStateEntry) {
            $this->initializeDynamicDefaultValueFor($gameStateEntry);
        }
    }

    private function initializeDynamicDefaultValueFor(GameStateEntry $gameStateEntry) {
        if (!$gameStateEntry->hasStaticInitialValue()) {
            $this->setGameStateInitialValue($gameStateEntry->name,
                                            $gameStateEntry->getInitialValue($this->gameOptions));
        }
    }
}