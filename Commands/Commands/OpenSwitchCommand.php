<?php

namespace Commands\Commands;

use Commands\Interfaces\Command;

class OpenSwitchCommand implements Command{
    private $switchable;

    public function __construct($switchable){
        $this->switchable = $switchable;
    }

    public function Execute(){
        $this->switchable->PowerOn();
    }
}