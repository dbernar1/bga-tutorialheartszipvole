<?php

namespace ZipVole;


use Table;

abstract class Game {
    private Table $table;

    public function __construct(Table $table) {
        $this->table = $table;
    }


    public function initialize() {
        if (method_exists($this, "initializeGameState")) {
            $this->initializeGameState();
        }

        if (method_exists($this->table, "initializeDecks")) {
            $this->table->initializeDecks();
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

        if (method_exists($this->table, 'createDecks')) {
            $this->table->createDecks();
        }
    }

    abstract public function enhanceAllDatasResult(array  &$result,
                                                   string $currentPlayerId);

}