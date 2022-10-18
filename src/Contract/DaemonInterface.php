<?php

namespace PHPAlchemist\Barbas\Contract;

interface DaemonInterface
{

    public function __construct(int $sleepTime = 600, int $timeLimit = 0);

    public function configure() : void;
    public function execute() : void;
}
