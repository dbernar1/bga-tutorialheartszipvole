<?php

namespace ZipVole\GameTraits;

use ZipVole\GameOption;

trait GameWithOptions {
    use GameWithStateOrOptions;

    protected array $gameOptions;

    protected function gameOptionLabels(): array {
        return array_reduce(
            $this->gameOptions,
            function (array      $gameOptionLabels,
                      GameOption $gameOption) {
                $gameOptionLabels[$gameOption->name] = $gameOption->id;

                return $gameOptionLabels;
            },
            [],
        );
    }

    protected function getGameOption(string $optionName): GameOption {
        return $this->gameOptions[$optionName];
    }

    private function getSelectedOptionValues() {
        foreach ($this->gameOptions as $gameOption) {
            $gameOption->selectedValue = intval($this->table->getGameStateValue($gameOption->name));
        }
    }
}