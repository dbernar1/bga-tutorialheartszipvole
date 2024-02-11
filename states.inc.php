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
 * states.inc.php
 *
 * TutorialHeartsZipvole game states description
 *
 */

/*
   Game state machine is a tool used to facilitate game developpement by doing common stuff that can be set up
   in a very easy way from this configuration file.

   Please check the BGA Studio presentation about game state to understand this, and associated documentation.

   Summary:

   States types:
   _ activeplayer: in this type of state, we expect some action from the active player.
   _ multipleactiveplayer: in this type of state, we expect some action from multiple players (the active players)
   _ game: this is an intermediary state where we don't expect any actions from players. Your game logic must decide what is the next game state.
   _ manager: special type for initial and final state

   Arguments of game states:
   _ name: the name of the GameState, in order you can recognize it on your own code.
   _ description: the description of the current game state is always displayed in the action status bar on
                  the top of the game. Most of the time this is useless for game state with "game" type.
   _ descriptionmyturn: the description of the current game state when it's your turn.
   _ type: defines the type of game states (activeplayer / multipleactiveplayer / game / manager)
   _ action: name of the method to call when this game state become the current game state. Usually, the
             action method is prefixed by "st" (ex: "stMyGameStateName").
   _ possibleactions: array that specify possible player actions on this step. It allows you to use "checkAction"
                      method on both client side (Javacript: this.checkAction) and server side (PHP: self::checkAction).
   _ transitions: the transitions are the possible paths to go from a game state to another. You must name
                  transitions in order to use transition names in "nextState" PHP method, and use IDs to
                  specify the next game state for each transition.
   _ args: name of the method to call to retrieve arguments for this gamestate. Arguments are sent to the
           client side to be used on "onEnteringState" or to set arguments in the gamestate description.
   _ updateGameProgression: when specified, the game progression is updated (=> call to your getGameProgression
                            method).
*/

//    !! It is not a good idea to modify this file when a game is running !!

if (!defined("ST_END_GAME")) {
    define("ST_MANAGER_SET_UP_GAME", 1);
    define("ST_PLAYER_BEFORE_ENCOUNTER", 10);
    define("ST_PLAYER_ENCOUNTER_CHOOSING_HAZARD", 13);
    define("ST_PLAYER_ENCOUNTER_NO_FREE_CARDS_DRAWN", 16);
    define("ST_GAME_PROCESSING_DRAWN_CARD", 19);
    define("ST_PLAYER_ENCOUNTER_WON", 22);
    define("ST_PLAYER_ENCOUNTER_NOT_WON_YET", 25);
    define("ST_GAME_PROCESSING_ENCOUNTER_WIN", 28);
    define("ST_GAME_FINALIZING_ENCOUNTER", 31);
    define("ST_GAME_ADVANCING_PHASE", 34);
    define("ST_PLAYER_ALL_HAZARD_PHASES_COMPLETED", 37);
    define("ST_PLAYER_PIRATE_ENCOUNTER_NO_FREE_CARDS_DRAWN", 40);
    define("ST_GAME_PROCESSING_DRAWN_CARD_FOR_PIRATE_ENCOUNTER", 43);
    define("ST_PLAYER_PIRATE_ENCOUNTER_NOT_WON_YET", 46);
    define("ST_GAME_PROCESSING_PIRATE_ENCOUNTER_WIN", 49);
    define("ST_PLAYER_FIRST_PIRATE_ENCOUNTER_WON", 52);
    define("ST_PLAYER_GAME_WON", 93);
    define("ST_PLAYER_GAME_LOST", 96);
    define("ST_MANAGER_END_GAME", 99);
}

$machinestates = [
    // The initial state. Please do not modify.
    ST_MANAGER_SET_UP_GAME => [
        "name" => "gameSetup",
        "description" => "",
        "type" => "manager",
        "action" => "stGameSetup",
        "transitions" => array("" => ST_PLAYER_BEFORE_ENCOUNTER)
    ],

    ST_PLAYER_BEFORE_ENCOUNTER => [
        "type" => "activeplayer",
        "possibleActions" => ["getHazardOptions"],
        "transitions" => [
            "getHazardOptions" => ST_PLAYER_ENCOUNTER_CHOOSING_HAZARD,
        ]
    ],
    ST_PLAYER_ENCOUNTER_CHOOSING_HAZARD => [
        //TODO: What when there is only one hazard left?
        "type" => "activeplayer",
        "possibleActions" => ["chooseHazard"],
        "transitions" => [
            "chooseHazard" => ST_PLAYER_ENCOUNTER_NO_FREE_CARDS_DRAWN,
        ]
    ],
    ST_PLAYER_ENCOUNTER_NO_FREE_CARDS_DRAWN => [
        "type" => "activeplayer",
        "possibleActions" => ["drawFirstFreeCard"],
        "transitions" => [
            "drawFirstFreeCard" => ST_GAME_PROCESSING_DRAWN_CARD,
        ]
    ],
    ST_GAME_PROCESSING_DRAWN_CARD => [
        "type" => "game",
        "transitions" => [
            "encounterNotWonYet" => ST_PLAYER_ENCOUNTER_NOT_WON_YET,
            "encounterWon" => ST_PLAYER_ENCOUNTER_WON,
            "ranOutOfLives" => ST_PLAYER_GAME_LOST,
        ]
    ],
    ST_PLAYER_ENCOUNTER_NOT_WON_YET => [
        "type" => "activeplayer",
        "possibleActions" => ["drawFreeCard", "drawPaidCard"], // TODO: Card special abilities
        "transitions" => [
            "drawFreeCard" => ST_GAME_PROCESSING_DRAWN_CARD,
            "drawPaidCard" => ST_GAME_PROCESSING_DRAWN_CARD,
        ]
    ],
    ST_PLAYER_ENCOUNTER_WON => [
        "type" => "activeplayer",
        "possibleActions" => ["celebrateWin", "drawFreeCard", "drawPaidCard"],
        "transitions" => [
            "drawFreeCard" => ST_GAME_PROCESSING_DRAWN_CARD,
            "drawPaidCard" => ST_GAME_PROCESSING_DRAWN_CARD,
            "celebrateWin" => ST_GAME_PROCESSING_ENCOUNTER_WIN,
        ]
    ],
    ST_GAME_PROCESSING_ENCOUNTER_WIN => [
        "type" => "game",
        "transitions" => [
            "" => ST_GAME_FINALIZING_ENCOUNTER,
        ],
    ],
    ST_GAME_FINALIZING_ENCOUNTER => [
        "name" => "afterEncounter",
        "description" => '',
        "type" => "game",
        "action" => "stAfterEncounter",
        "transitions" => [
            "endGame" => ST_MANAGER_END_GAME,
            "progressPhase" => ST_GAME_ADVANCING_PHASE,
            "nextEncounter" => ST_PLAYER_BEFORE_ENCOUNTER
        ]
    ],
    ST_GAME_ADVANCING_PHASE => [
        "type" => "game",
        "transitions" => [
            "pirates" => ST_PLAYER_ALL_HAZARD_PHASES_COMPLETED,
            "normal" => ST_PLAYER_BEFORE_ENCOUNTER,
        ]
    ],
    ST_PLAYER_ALL_HAZARD_PHASES_COMPLETED => [
        "type" => "activeplayer",
        "possibleActions" => ["selectFirstPirateEncounter"],
        "transitions" => [
            "selectFirstPirateEncounter" => ST_PLAYER_PIRATE_ENCOUNTER_NO_FREE_CARDS_DRAWN,
        ]
    ],
    ST_PLAYER_PIRATE_ENCOUNTER_NO_FREE_CARDS_DRAWN => [
        "type" => "activeplayer",
        "possibleActions" => ["drawFirstFreeCard"],
        "transitions" => [
            "drawFirstFreeCard" => ST_GAME_PROCESSING_DRAWN_CARD_FOR_PIRATE_ENCOUNTER,
        ]
    ],
    ST_GAME_PROCESSING_DRAWN_CARD_FOR_PIRATE_ENCOUNTER => [
        "type" => "game",
        "transitions" => [
            "encounterNotWonYet" => ST_PLAYER_PIRATE_ENCOUNTER_NOT_WON_YET,
            "encounterWon" => ST_GAME_PROCESSING_PIRATE_ENCOUNTER_WIN,
            "ranOutOfLives" => ST_PLAYER_GAME_LOST,
        ]
    ],
    ST_PLAYER_PIRATE_ENCOUNTER_NOT_WON_YET => [
        "type" => "activeplayer",
        "possibleActions" => ["drawFreeCard", "drawPaidCard"], // TODO: Card special abilities
        "transitions" => [
            "drawFreeCard" => ST_GAME_PROCESSING_DRAWN_CARD_FOR_PIRATE_ENCOUNTER,
            "drawPaidCard" => ST_GAME_PROCESSING_DRAWN_CARD_FOR_PIRATE_ENCOUNTER,
        ]
    ],
    ST_GAME_PROCESSING_PIRATE_ENCOUNTER_WIN => [
        "type" => "game",
        "transitions" => [
            "firstPirateEncounterWon" => ST_PLAYER_FIRST_PIRATE_ENCOUNTER_WON,
            "bothPirateEncountersWon" => ST_PLAYER_GAME_WON,
        ]
    ],
    ST_PLAYER_FIRST_PIRATE_ENCOUNTER_WON => [
        "type" => "activeplayer",
        "possibleActions" => ["drawFreeCard", "drawPaidCard", "celebrateWin"],
        "transitions" => [
            "drawFreeCard" => ST_GAME_PROCESSING_DRAWN_CARD_FOR_PIRATE_ENCOUNTER,
            "drawPaidCard" => ST_GAME_PROCESSING_DRAWN_CARD_FOR_PIRATE_ENCOUNTER,
            "celebrateWin" => ST_GAME_PROCESSING_PIRATE_ENCOUNTER_WIN,
        ]
    ],
    ST_PLAYER_GAME_WON => [
        "type" => "activeplayer",
        "possibleActions" => ["celebrateGameWin"],
        "transitions" => [
            "celebrateWin" => ST_MANAGER_END_GAME,
        ]
    ],
    ST_PLAYER_GAME_LOST => [
        "type" => "activeplayer",
        "possibleActions" => ["mournDeathOfRobinson"],
        "transitions" => [
            "mournDeathOfRobinson" => ST_MANAGER_END_GAME,
        ]
    ],
    // Final state.
    // Please do not modify (and do not overload action/args methods).
    ST_MANAGER_END_GAME => [
        "name" => "gameEnd",
        "description" => clienttranslate("End of game"),
        "type" => "manager",
        "action" => "stGameEnd",
        "args" => "argGameEnd"
    ],
];



