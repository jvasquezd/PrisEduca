<?php
namespace App\ChainOfResponsibility;

class DebugLogger extends AbstractLogger{

    protected $levels;

    public function __construct($levels)
    {
        $this->levels =$levels;
    }

    protected function displayLogInfo($msg): string
    {
        return "DEBUG  LOGGER INFO".$msg;
    }
}
