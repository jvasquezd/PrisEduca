<?php
namespace App\ChainOfResponsibility;

class ErrorLogger extends AbstractLogger {

    protected $levels;

    public function __construct($levels)
    {
        $this->levels=$levels;
    }


    protected function displayLogInfo($msg): string
    {
        return "ERROR LOGGER INFO: ".$msg;
    }
}


