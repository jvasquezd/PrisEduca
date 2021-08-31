<?php

namespace App\ChainOfResponsibility;

abstract class AbstractLogger {
    public static $OUTPUTINFO=1;
    public static $ERRORINFO=2;
    public static $DEBUGINFO=3;

    protected $levels;

    protected AbstractLogger $nextLevelLogger;

    /**
     * @param AbstractLogger $nextLevelLogger
     */
    public function setNextLevelLogger(AbstractLogger $nextLevelLogger): void
    {
        $this->nextLevelLogger = $nextLevelLogger;
    }

    public function logMessage($levels, $msg){
        if($this->levels<=$levels){
            $this->displayLogInfo($msg);
        }

        if($this->nextLevelLogger!=null){
            $this->nextLevelLogger->logMessage($levels, $msg);
        }
    }

    abstract protected function displayLogInfo($msg): string;
}
