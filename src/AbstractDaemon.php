<?php

namespace PHPAlchemist;

use PHPAlchemist\Contract\DaemonInterface;

class AbstractDaemon implements DaemonInterface
{
    /** @var int $timeLimit */
    protected $timeLimit = 0;

    /** @var int $sleepTime */
    protected $sleepTime = 600;

    public function __construct(int $sleepTime = 600, int $timeLimit = 0)
    {
        $this->sleepTime = $sleepTime;
        $this->timeLimit = $timeLimit;
    }

    /**
     * @return int
     */
    public function getTimeLimit() : int
    {
        return $this->timeLimit;
    }

    /**
     * @return int
     */
    public function getSleepTime() : int
    {
        return $this->sleepTime;
    }

    public function configure() : void { }

    public function execute() : void
    {
        throw new \Exception("Exception Method Not implemented");
    }

}
