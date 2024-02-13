<?php

namespace ZipVole;

use Exception;

class GameStateEntry {
    public int $id;
    public string $name;
    public ?string $initialValue;
    private $determineInitialValueBasedOnOptions;

    public function __construct(int       $id,
                                string    $name,
                                ?string   $initialValue = null,
                                ?callable $determineInitialValueBasedOnOptions = null) {
        $this->id = $id;
        $this->name = $name;
        $this->initialValue = $initialValue;
        $this->determineInitialValueBasedOnOptions = $determineInitialValueBasedOnOptions;
    }

    public function hasStaticInitialValue(): bool {
        return !is_null($this->initialValue);
    }

    /**
     * @throws Exception
     */
    public function getInitialValue(array $gameOptions) {
        if (!is_callable($this->determineInitialValueBasedOnOptions)) {
            throw new Exception("Can not determine initial value. " .
                                "Please provide a callable determineInitialValueBasedOnOptions to constructor.");
        }

        return ($this->determineInitialValueBasedOnOptions)($gameOptions);
    }
}