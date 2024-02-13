<?php

use ZipVole\GameOption;

$gameOptions = require "modules/Friday/options.php";

$game_options = GameOption::getGameOptionsIncFormatted($gameOptions);