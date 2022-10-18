<?php

use PHPAlchemist\Barbas\AbstractDaemon;
use PHPAlchemist\Traits\PerformanceTrait;

class Daemon extends AbstractDaemon
{
    use PerformanceTrait;

    /** @var int $timeLimit */
    protected $timeLimit = 0;

    /** @var int $sleepTime */
    protected $sleepTime = 600;

    /** @var bool $trackPefromance */
    protected bool $trackPefromance = false;

    /**
     * @return bool
     */
    public function isTrackPefromance() : bool
    {
        return $this->trackPefromance;
    }

    /**
     * @param bool $trackPefromance
     */
    public function setTrackPefromance(bool $trackPefromance) : void
    {
        $this->trackPefromance = $trackPefromance;
    }

    public function execute() : void
    {
        /* Remove the execution time limit */
        set_time_limit($this->getTimeLimit());
        while (true) {
            if ($this->trackPefromance)
                echo "==================\n" . $this->getPerformance()."\n==================\n";
            /* Sleep for the iteration interval */
            echo 'Time: '.date('H:i:s')."\n";
            echo $this->getPerformance()."\n";
            sleep($this->getSleepTime());
        }

    }

}
