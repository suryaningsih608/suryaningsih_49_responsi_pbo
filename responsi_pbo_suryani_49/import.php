<?php

require_once "data/conflict.php";
require_once "data/helper.php";

use Data\satu\Conflict;
use function Helper\helpMe;
use const Helper\APPLICATION;

$conflict1 = new Conflict();
$conflict2 = new Data\satu\Conflict();

helpMe();

echo APPLICATION . PHP_EOL;