<?php

namespace Commands\Commands;

use Commands\Interfaces\Command;

class CloseSwitchCommand implements Command{
    private $switchable;

    public function __construct($switchable){
        $this->switchable = $switchable;
    }

    public function Execute(){
        $this->switchable->PowerOff();
    }
}