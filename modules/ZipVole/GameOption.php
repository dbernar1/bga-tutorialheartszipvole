<?php

namespace ZipVole;

if (!function_exists("totranslate")) {
    function totranslate(string $untranslated): string {
        return $untranslated;
    }
}

class GameOption {
    public int $id;
    public string $name;
    public string $label;
    public array $availableOptions;
    public int $defaultValue;
    public int $selectedValue;

    public function __construct(int    $id,
                                string $name,
                                string $label,
                                array  $availableOptions,
                                int    $defaultValue) {
        $this->id = $id;
        $this->name = $name;
        $this->label = $label;
        $this->availableOptions = $availableOptions;
        $this->defaultValue = $defaultValue;
    }

    public static function getGameOptionsIncFormatted($gameOptions) {
        return array_reduce($gameOptions,
            function (array      $gameOptions,
                      GameOption $option): array {
                $translatedOptions = [];

                foreach ($option->availableOptions as $optionNumber => $optionAttributes) {
                    $translatedOptionAttributes = [];

                    foreach ($optionAttributes as $attributeName => $attributeValue) {
                        $translatedOptionAttributes[$attributeName] = totranslate($attributeValue);
                    }

                    $translatedOptions[$optionNumber] = $translatedOptionAttributes;
                }

                $gameOptions[$option->id] = [
                    'name' => $option->name,
                    'values' => $translatedOptions,
                    'default' => $option->defaultValue,
                ];

                return $gameOptions;
            },
                            []);
    }
}