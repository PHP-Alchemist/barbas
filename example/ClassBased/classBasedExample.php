<?php

require_once("../../vendor/autoload.php");
require_once("Daemon.php");

$daemon = new Daemon(5);
$daemon->setTrackPefromance(true);
$daemon->execute();
