<?php
/**
 *------
 * BGA framework: Gregory Isabelli & Emmanuel Colin & BoardGameArena
 * TutorialHeartsZipvole implementation : © <Your name here> <Your email address here>
 *
 * This code has been produced on the BGA studio platform for use on http://boardgamearena.com.
 * See http://en.boardgamearena.com/#!doc/Studio for more information.
 * -----
 *
 * tutorialheartszipvole.game.php
 *
 * This is the main file for your game logic.
 *
 * In this PHP file, you are going to defines the rules of the game.
 *
 */

spl_autoload_register(function ($className) {
    $file = './modules/' . str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';

    if (!file_exists($file)) {
        return false;
    } else {
        require_once $file;
        return true;
    }
});

use Cards\Aging\Difficult\Idiotic;
use Cards\Aging\Difficult\Suicidal;
use Cards\Aging\Difficult\VeryHungry;
use Cards\Aging\Normal\Hungry;
use Cards\Aging\Normal\Scared;
use Cards\Aging\Normal\Stupid;
use Cards\Aging\Normal\VeryStupid;
use Cards\Aging\Normal\VeryTired;
use Cards\Card;
use Cards\Hazard\Cannibals\EncounterCannibalsToAcquireWeapon;
use Cards\Hazard\ExploringTheIsland\ExploringTheIslandToAcquireFood;
use Cards\Hazard\ExploringTheIsland\ExploringTheIslandToAcquireWeapon;
use Cards\Hazard\ExploringTheIsland\ExploringTheIslandToLearnDeception;
use Cards\Hazard\ExploringTheIsland\ExploringTheIslandToLearnMimicry;
use Cards\Hazard\ExploringTheIsland\ExploringTheIslandToLearnRealization;
use Cards\Hazard\ExploringTheIsland\ExploringTheIslandToLearnRepeat;
use Cards\Hazard\FurtherExploringTheIsland\FurtherExploringTheIslandToAcquireFood;
use Cards\Hazard\FurtherExploringTheIsland\FurtherExploringTheIslandToGainExperience;
use Cards\Hazard\FurtherExploringTheIsland\FurtherExploringTheIslandToLearnRealization;
use Cards\Hazard\FurtherExploringTheIsland\FurtherExploringTheIslandToLearnRepeat;
use Cards\Hazard\FurtherExploringTheIsland\FurtherExploringTheIslandToLearnStrategy;
use Cards\Hazard\FurtherExploringTheIsland\FurtherExploringTheIslandToLearnVision;
use Cards\Hazard\WildAnimals\EncounterWildAnimalsToLearnExperience;
use Cards\Hazard\WildAnimals\EncounterWildAnimalsToLearnRealization;
use Cards\Hazard\WildAnimals\EncounterWildAnimalsToLearnStrategy;
use Cards\Hazard\WildAnimals\EncounterWildAnimalsToLearnVision;
use Cards\Hazard\WithTheRaftToTheWreck\WithTheRaftToTheWreckToAcquireBooks;
use Cards\Hazard\WithTheRaftToTheWreck\WithTheRaftToTheWreckToAcquireEquipment;
use Cards\Hazard\WithTheRaftToTheWreck\WithTheRaftToTheWreckToAcquireFood;
use Cards\Hazard\WithTheRaftToTheWreck\WithTheRaftToTheWreckToDevelopStrategy;
use Cards\Hazard\WithTheRaftToTheWreck\WithTheRaftToTheWreckToLearnDeception;
use Cards\Hazard\WithTheRaftToTheWreck\WithTheRaftToTheWreckToLearnMimicry;
use Cards\Hazard\WithTheRaftToTheWreck\WithTheRaftToTheWreckToLearnRealization;
use Cards\Pirate;
use Cards\Robinson\Distracted;
use Cards\Robinson\Eating;
use Cards\Robinson\Focused;
use Cards\Robinson\Genius;
use Cards\Robinson\Weak;

require_once(APP_GAMEMODULE_PATH . 'module/table/table.game.php');


if (!defined('OPTION_LEVEL')) {
    define('OPTION_LEVEL', 'OPTION_LEVEL');
    define('CURRENT_PHASE', 'CURRENT_PHASE');
    define('REMAINING_LIVES', 'REMAINING_LIVES');
    define('SPARE_LIVES', 'SPARE_LIVES');
    define('GREEN_PHASE', '1');
    define('YELLOW_PHASE', '2');
    define('RED_PHASE', '3');
    define('PIRATE_PHASE', '4');
}

class GameStateEntry
{
    public int $id;
    public string $name;
    public ?string $initialValue;

    /**
     * @param int $id
     * @param string $name
     * @param string|null $initialValue
     */
    public function __construct(int     $id,
                                string  $name,
                                ?string $initialValue = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->initialValue = $initialValue;
    }

    public function hasInitialValue(): bool
    {
        return !is_null($this->initialValue);
    }
}

class GameOption
{
    public int $id;
    public string $name;
    public string $translatedLabel;
    public array $availableOptions;
    public int $defaultValue;
    public int $selectedValue;

    public function __construct(int    $id,
                                string $name,
                                string $translatedLabel,
                                array  $availableOptions,
                                int    $defaultValue)
    {
        $this->id = $id;
        $this->name = $name;
        $this->translatedLabel = $translatedLabel;
        $this->availableOptions = $availableOptions;
        $this->defaultValue = $defaultValue;
    }
}

class TutorialHeartsZipvole extends Table
{
    private CardTypes $cardTypes;

    private array $gameStateEntries;
    private array $gameOptions;
    private array $cards;

    function __construct()
    {
        // Your global variables labels:
        //  Here, you can assign labels to global variables you are using for this game.
        //  You can use any number of global variables with IDs between 10 and 99.
        //  If your game has options (variants), you also have to associate here a label to
        //  the corresponding ID in gameoptions.inc.php.
        // Note: afterwards, you can get/set the global variables with getGameStateValue/setGameStateInitialValue/setGameStateValue
        parent::__construct();

        $this->gameStateEntries = [
            new GameStateEntry(10, CURRENT_PHASE, GREEN_PHASE),
            new GameStateEntry(11, REMAINING_LIVES),
            new GameStateEntry(12, SPARE_LIVES, 2),
        ];

        $this->gameOptions = [
            OPTION_LEVEL => new GameOption(100,
                                           OPTION_LEVEL,
                                           totranslate('Level'),
                                           [
                                               1 => [
                                                   'name' => totranslate('Level 1'),
                                                   'description' => totranslate("Start with 20 lives"),
                                                   'tmdisplay' => totranslate('Level 1'),
                                               ],
                                               2 => [
                                                   'name' => totranslate('Level 2'),
                                                   'description' => totranslate("Instead of playing 3 rounds, the game stops when a player reaches or goes over 26."),
                                                   'tmdisplay' => totranslate('Level 2'),
                                               ],
                                           ],
                                           1),
        ];

        self::initGameStateLabels(array_merge($this->gameStateLabels(),
                                              $this->gameOptionLabels()));

        $this->cards = $this->createDeck('card');
    }

    private function gameStateLabels()
    {
        return array_map(
            fn(GameStateEntry $gameStateEntry) => $gameStateEntry->initLabels(),
            $this->gameStateEntries
        );
    }

    private function initializeGameStateDependingOnSelectedOptions(): void
    {
        $startingLives = $this->gameOptions[OPTION_LEVEL]->selectedValue === 4 ? 18 : 20;
        $this->setGameStateInitialValue(REMAINING_LIVES, $startingLives);
    }

    /*
        setupNewGame:

        This method is called only once, when a new game is launched.
        In this method, you must setup the game according to the game rules, so that
        the game is ready to be played.
    */

    protected function setupNewGame($players,
                                    $options = array())
    {
        // Set the colors of the players with HTML color code
        // The default below is red/green/blue/orange/brown
        // The number of colors defined here must correspond to the maximum number of players allowed for the gams
        $gameinfos = self::getGameinfos();
        $default_colors = $gameinfos['player_colors'];

        // Create players
        // Note: if you added some extra field on "player" table in the database (dbmodel.sql), you can initialize it there.
        $sql = "INSERT INTO player (player_id, player_color, player_canal, player_name, player_avatar) VALUES ";
        $values = array();
        foreach ($players as $player_id => $player) {
            $color = array_shift($default_colors);
            $values[] = "('" . $player_id . "','$color','" . $player['player_canal'] . "','" . addslashes($player['player_name']) . "','" . addslashes($player['player_avatar']) . "')";
        }
        $sql .= implode(',', $values);
        self::DbQuery($sql);
        self::reattributeColorsBasedOnPreferences($players, $gameinfos['player_colors']);
        self::reloadPlayersBasicInfos();

        /****** Some Basic Initialization ******/
        foreach ($this->gameStateEntries as $gameStateEntry) {
            $this->initializeGameStateFor($gameStateEntry);
        }
        /***** End of Basic Initialization *****/

        /************ Start the game initialization *****/

        $this->getSelectedOptionValues();
        $this->cardTypes = new CardTypes();

        $this->cards->createCards($this->cardTypes->toCreateCardsSpec($currentGameLevel),
                                  'deck');
        $this->cards->shuffle();

        $this->initializeGameStateDependingOnSelectedOptions();

        // Activate first player (which is in general a good idea :) )
        $this->activeNextPlayer();

        /************ End of the game initialization *****/
    }

    protected function getGameName()
    {
        // Used for translations and stuff. Please do not modify.
        return "tutorialheartszipvole";
    }

    /*
        getAllDatas:

        Gather all informations about current game situation (visible by the current player).

        The method is called each time the game interface is displayed to a player, ie:
        _ when the game starts
        _ when a player refreshes the game page (F5)
    */
    protected function getAllDatas()
    {
        $result = array();

        $current_player_id = self::getCurrentPlayerId();    // !! We must only return informations visible by this player !!

        // Get information about players
        // Note: you can retrieve some extra field you added for "player" table in "dbmodel.sql" if you need it.
        $sql = "SELECT player_id id, player_score score FROM player ";
        $result['players'] = self::getCollectionFromDb($sql);

        // TODO: Gather all information about current game situation (visible by player $current_player_id).

        return $result;
    }

    /*
        getGameProgression:

        Compute and return the current game progression.
        The number returned must be an integer beween 0 (=the game just started) and
        100 (= the game is finished or almost finished).

        This method is called each time we are in a game state with the "updateGameProgression" property set to true
        (see states.inc.php)
    */
    function getGameProgression()
    {
        // TODO: compute and return the game progression

        return 0;
    }


//////////////////////////////////////////////////////////////////////////////
//////////// Utility functions
////////////

    /*
        In this space, you can put any utility methods useful for your game logic
    */


//////////////////////////////////////////////////////////////////////////////
//////////// Player actions
////////////

    /*
        Each time a player is doing some game action, one of the methods below is called.
        (note: each method below must match an input method in tutorialheartszipvole.action.php)
    */

    /*

    Example:

    function playCard( $card_id )
    {
        // Check that this is the player's turn and that it is a "possible action" at this game state (see states.inc.php)
        self::checkAction( 'playCard' );

        $player_id = self::getActivePlayerId();

        // Add your game logic to play a card there
        ...

        // Notify all players about the card played
        self::notifyAllPlayers( "cardPlayed", clienttranslate( '${player_name} plays ${card_name}' ), array(
            'player_id' => $player_id,
            'player_name' => self::getActivePlayerName(),
            'card_name' => $card_name,
            'card_id' => $card_id
        ) );

    }

    */


//////////////////////////////////////////////////////////////////////////////
//////////// Game state arguments
////////////

    /*
        Here, you can create methods defined as "game state arguments" (see "args" property in states.inc.php).
        These methods function is to return some additional information that is specific to the current
        game state.
    */

    /*

    Example for game state "MyGameState":

    function argMyGameState()
    {
        // Get some values from the current game situation in database...

        // return values:
        return array(
            'variable1' => $value1,
            'variable2' => $value2,
            ...
        );
    }
    */

//////////////////////////////////////////////////////////////////////////////
//////////// Game state actions
////////////

    /*
        Here, you can create methods defined as "game state actions" (see "action" property in states.inc.php).
        The action method of state X is called everytime the current game state is set to X.
    */

    /*

    Example for game state "MyGameState":

    function stMyGameState()
    {
        // Do some stuff ...

        // (very often) go to another gamestate
        $this->gamestate->nextState( 'some_gamestate_transition' );
    }
    */

//////////////////////////////////////////////////////////////////////////////
//////////// Zombie
////////////

    /*
        zombieTurn:

        This method is called each time it is the turn of a player who has quit the game (= "zombie" player).
        You can do whatever you want in order to make sure the turn of this player ends appropriately
        (ex: pass).

        Important: your zombie code will be called when the player leaves the game. This action is triggered
        from the main site and propagated to the gameserver from a server, not from a browser.
        As a consequence, there is no current player associated to this action. In your zombieTurn function,
        you must _never_ use getCurrentPlayerId() or getCurrentPlayerName(), otherwise it will fail with a "Not logged" error message.
    */

    function zombieTurn($state,
                        $active_player)
    {
        $statename = $state['name'];

        if ($state['type'] === "activeplayer") {
            switch ($statename) {
                default:
                    $this->gamestate->nextState("zombiePass");
                    break;
            }

            return;
        }

        if ($state['type'] === "multipleactiveplayer") {
            // Make sure player is in a non blocking status for role turn
            $this->gamestate->setPlayerNonMultiactive($active_player, '');

            return;
        }

        throw new feException("Zombie mode not supported at this game state: " . $statename);
    }

///////////////////////////////////////////////////////////////////////////////////:
////////// DB upgrade
//////////

    /*
        upgradeTableDb:

        You don't have to care about this until your game has been published on BGA.
        Once your game is on BGA, this method is called everytime the system detects a game running with your old
        Database scheme.
        In this case, if you change your Database scheme, you just have to apply the needed changes in order to
        update the game database and allow the game to continue to run with your new version.

    */

    function upgradeTableDb($from_version)
    {
        // $from_version is the current version of this game database, in numerical form.
        // For example, if the game was running with a release of your game named "140430-1345",
        // $from_version is equal to 1404301345

        // Example:
//        if( $from_version <= 1404301345 )
//        {
//            // ! important ! Use DBPREFIX_<table_name> for all tables
//
//            $sql = "ALTER TABLE DBPREFIX_xxxxxxx ....";
//            self::applyDbUpgradeToAllDB( $sql );
//        }
//        if( $from_version <= 1405061421 )
//        {
//            // ! important ! Use DBPREFIX_<table_name> for all tables
//
//            $sql = "CREATE TABLE DBPREFIX_xxxxxxx ....";
//            self::applyDbUpgradeToAllDB( $sql );
//        }
//        // Please add your future database scheme changes here
//
//


    }

    private function getCurrentGameLevel(): int
    {
        return intval($this->getGameStateValue(OPTION_LEVEL));
    }

    private function createDeck(string $tableName)
    {
        $deck = self::getNew("module.common.deck");
        $deck->init($tableName);

        return $deck;
    }

    private function initializeGameStateFor(GameStateEntry $gameStateEntry)
    {
        if ($gameStateEntry->hasInitialValue()) {
            $this->setGameStateInitialValue($gameStateEntry->name, $gameStateEntry->initialValue);
        }
    }

    private function getSelectedOptionValues()
    {
        foreach ($this->gameOptions as $gameOption) {
            $gameOption->selectedValue = intval($this->getGameStateValue($gameOption->name));
        }
    }
}

class CardTypes // TODO: This name sucks
{
    public array $robinsonCards;
    public array $normalAgingCards;
    public array $difficultAgingCards;
    public array $hazardCards;
    public array $pirateCards;

    public function __construct()
    {
        $this->robinsonCards = [
            new Distracted(),
            new Weak(),
            new Focused(),
            new Genius(),
            new Eating(),
        ];

        $this->normalAgingCards = [
            new \Cards\Aging\Normal\Distracted(),
            new Scared(),
            new VeryTired(),
            new Hungry(),
            new Stupid(),
            new VeryStupid(),
        ];

        $this->difficultAgingCards = [
            new VeryHungry(),
            new Idiotic(),
            new Suicidal(),
        ];

        $this->hazardCards = [
            // TODO: Create classes that explain how many there are
            new WithTheRaftToTheWreckToDevelopStrategy(),
            new WithTheRaftToTheWreckToAcquireEquipment(),
            new WithTheRaftToTheWreckToAcquireFood(),
            new WithTheRaftToTheWreckToLearnMimicry(),
            new WithTheRaftToTheWreckToLearnRealization(),
            new WithTheRaftToTheWreckToLearnDeception(),
            new WithTheRaftToTheWreckToAcquireBooks(),

            new ExploringTheIslandToAcquireWeapon(),
            new ExploringTheIslandToAcquireFood(),
            new ExploringTheIslandToLearnDeception(),
            new ExploringTheIslandToLearnRepeat(),
            new ExploringTheIslandToLearnRealization(),
            new ExploringTheIslandToLearnMimicry(),

            new FurtherExploringTheIslandToLearnRepeat(),
            new FurtherExploringTheIslandToAcquireFood(),
            new FurtherExploringTheIslandToLearnStrategy(),
            new FurtherExploringTheIslandToLearnVision(),
            new FurtherExploringTheIslandToLearnRealization(),
            new FurtherExploringTheIslandToGainExperience(),

            new EncounterWildAnimalsToLearnVision(),
            new EncounterWildAnimalsToLearnExperience(),
            new EncounterWildAnimalsToLearnRealization(),
            new EncounterWildAnimalsToLearnStrategy(),

            new EncounterCannibalsToAcquireWeapon(),
        ];

        $this->pirateCards = array_rand([
                                            new Pirate(6, 20),
                                            new Pirate(7, 25),
                                            new Pirate(8, 30),
                                            new Pirate(9, 35),
                                            new Pirate(10, 40),
                                            //  TODO: Implement the more complicated pirate Cards
                                        ],
                                        2);
    }

    public function toCreateCardsSpec(int $currentGameLevel): array
    {
        $createCardSpecFor = function (int  $typeArg,
                                       Card $card)
        use
        (
            $currentGameLevel
        ) {
            return [
                "type" => $card->cardType,
                "type_arg" => $typeArg,
                "nbr" => $card->getHowManyInDeck($currentGameLevel),
            ];
        };

        return array_merge(
            array_map($createCardSpecFor, $this->robinsonCards),
            array_map($createCardSpecFor, $this->normalAgingCards),
            array_map($createCardSpecFor, $this->difficultAgingCards),
            array_map($createCardSpecFor, $this->pirateCards),
            array_map($createCardSpecFor, $this->hazardCards),
        );
    }
}
