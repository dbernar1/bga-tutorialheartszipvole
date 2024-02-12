<?php

use ZipVole\GameOption;

if (!defined('OPTION_LEVEL')) {
    define('OPTION_LEVEL', 'OPTION_LEVEL');
}

return [
    OPTION_LEVEL => new GameOption(100,
                                   OPTION_LEVEL,
                                   'Level',
                                   [
                                       1 => [
                                           'name' => 'Level 1',
                                           'description' => "Start with 20 lives",
                                           'tmdisplay' => 'Level 1',
                                       ],
                                       2 => [
                                           'name' => 'Level 2',
                                           'description' => "Instead of playing 3 rounds, the game stops when a player reaches or goes over 26.",
                                           'tmdisplay' => 'Level 2',
                                       ],
                                   ],
                                   1),
];