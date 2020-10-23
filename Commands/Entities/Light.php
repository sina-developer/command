<?php

namespace Commands\Entities;

use Commands\Interfaces\Switchable;

class Light implements Switchable{
    public function PowerOn(){
        echo "Light Powrede On\n";
    }
    
    public function PowerOff(){
        echo "Light Powrede Off\n";
    }
}