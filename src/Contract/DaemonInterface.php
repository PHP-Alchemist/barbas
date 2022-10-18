<?php

namespace PHPAlchemist\Contract;

use PHPAlchemist\Type\Collection;

interface DaemonInterface
{

    public function __construct(int $sleepTime = 600, int $timeLimit = 0);

    public function configure() : void;
    public function execute() : void;
}
