<?php

namespace PHPAlchemist\Barbas\Contract;

interface DaemonInterface
{

    public function __construct(int $sleepTime = 600, int $timeLimit = 0);

    public function configure() : void;

    /**
     * Run the Daemon
     * @return void
     */
    public function execute() : void;

    /**
     * Where the individual tasks are completed.
     * Users should add their code here.
     * @return void
     */
    public function work() : void;
}
