<?php

namespace Commands\Handlers;

use Commands\Interfaces\Command;

class Switcher{
    private Command $closeCommand;
    private Command $openCommand;

    public function __construct(Command $closeCommand ,Command $openCommand){
        $this->closeCommand = $closeCommand;
        $this->openCommand = $openCommand;
    }

    public function close(){
        $this->closeCommand->Execute();
    }

    public function open(){
        $this->openCommand->Execute();
    }
}