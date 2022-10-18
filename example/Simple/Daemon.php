<?php

use PHPAlchemist\AbstractDaemon;
use PHPAlchemist\Traits\PerformanceTrait;

class Daemon extends AbstractDaemon
{
    use PerformanceTrait;

    public function configure() : void { }

    public function execute() : void
    {
        echo 'Time: '.date('H:i:s')."\n";
        echo $this->getPerformance()."\n";

    }

}
