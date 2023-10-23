<?php

namespace PHPAlchemist\Barbas;

use PHPAlchemist\Barbas\Contract\DaemonInterface;

class AbstractDaemon implements DaemonInterface
{
    public const TEN_MIN_IN_SECONDS = 600;
    public const NO_TIME_LIMIT = 0;

    /** @var int $timeLimit */
    protected $timeLimit;

    /** @var int $sleepTime */
    protected $sleepTime;

    public function __construct(int $sleepTime = self::TEN_MIN_IN_SECONDS, int $timeLimit = self::NO_TIME_LIMIT)
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

    public function configure() : void
    {
    }

    public function execute() : void
    {
        /* Remove the execution time limit */
        set_time_limit($this->getTimeLimit());
        while (true) {
            $this->work();
            sleep($this->getSleepTime());
        }
    }

    public function work() : void
    {
        throw new \Exception("Exception Method Not implemented");
    }

}
