<?php

require("./autoload.php");

use Commands\Entities\Light;
use Commands\Commands\CloseSwitchCommand;
use Commands\Commands\OpenSwitchCommand;
use Commands\Handlers\Switcher;

$light = new Light();

$switchClose = new CloseSwitchCommand($light);
$switchOpen = new OpenSwitchCommand($light);

$switcher = new Switcher($switchClose,$switchOpen);

$switcher->open();
$switcher->close();
