<?php

require_once("../../vendor/autoload.php");
require_once("Daemon.php");



$daemon = new Daemon();

function getPerformance()
{
    $mem_usage = memory_get_peak_usage();
    if ($mem_usage < 1024) {
        // These two are ignored as the nature of phpUnit testing will not allow me to come in under a meg
        // and run coverage
        // @codeCoverageIgnoreStart
        $whoa = $mem_usage." bytes";
    } elseif ($mem_usage < 1048576) {
        $whoa = round($mem_usage / 1024, 2)." kilobytes";
        // @codeCoverageIgnoreEnd
    } else {
        $whoa = round($mem_usage / 1048576, 2)." megabytes";
    }

    return $whoa;
}

/* Remove the execution time limit */
set_time_limit($daemon->getTimeLimit());

$daemon->execute();
while (true) {
    echo getPerformance() . "\n==================\n";

    /* Sleep for the iteration interval */
    sleep($daemon->getSleepTime());
}
