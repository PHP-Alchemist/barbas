<?php

require_once("../../vendor/autoload.php");
require_once("Daemon.php");

$daemon = new Daemon(25);
$daemon->setTrackPefromance(true);
$daemon->execute();
