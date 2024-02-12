<?php
if (!class_exists("Table")) {
    class GameStateManager
    {
        public function nextState(string $string)
        {
        }

        public function setPlayerNonMultiactive(string $active_player_id,
                                                string $string)
        {
        }
    }

    class feException extends Exception
    {

    }

    class Table
    {
        protected GameStateManager $gamestate;

        protected function __construct()
        {
            $this->gamestate = new GameStateManager();
        }

        protected static function initGameStateLabels(array $getGameStateAndOptionLabels)
        {
        }

        protected static function getNew(string $string): Deck
        {
            return new Deck();
        }

        protected function setGameStateInitialValue(string $REMAINING_LIVES,
                                                    int    $startingLives)
        {
        }

        protected function getGameStateValue(string $gameStateOrOptionName): string
        {
            return '';
        }

        protected static function getGameinfos(): array
        {
            return [];
        }

        protected static function DbQuery(string $sql)
        {
        }

        protected static function reattributeColorsBasedOnPreferences(array $players,
                                                                      array $player_colors)
        {
        }

        protected static function reloadPlayersBasicInfos()
        {
        }

        protected function activeNextPlayer()
        {
        }

        protected static function getCurrentPlayerId(): string
        {
            return '';
        }

        protected static function getCollectionFromDb(string $sql): array
        {
            return [];
        }
    }

    class Deck
    {
        public function init(string $databaseTableName)
        {
        }

        public function createCards(array  $cards,
                                    string $location = 'deck',
                                    ?int   $location_arg = null)
        {
        }

        public function shuffle($location)
        {
        }
    }
}