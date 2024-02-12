<?php

namespace ZipVole\GameTraits;

trait GameWithStateOrOptions {
    private function getGameStateAndOptionLabels(): array {
        $gameStateLabels = method_exists($this, "gameStateLabels") ? $this->gameStateLabels() : [];
        $gameOptionLabels = method_exists($this, "gameOptionLabels") ? $this->gameOptionLabels() : [];

        return array_merge($gameStateLabels, $gameOptionLabels);
    }

    protected function initializeGameState() {
        self::initGameStateLabels($this->getGameStateAndOptionLabels());
    }
}