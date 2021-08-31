<?php

namespace App\ChainOfResponsibility;

class WarnLogger extends AbstractLogger
{
    protected $levels;

    public function __construct($levels)
    {
        $this->levels =$levels;
    }

    protected function displayLogInfo($msg): string
    {
        return "WARN LOGGER INFO: ".$msg;
    }
}
