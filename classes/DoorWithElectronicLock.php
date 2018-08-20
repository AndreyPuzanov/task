<?php

class DoorWithElectronicLock extends Door 
{   
    private const PASS_CLOSE = '1111';
    private const PASS_OPEN = '0000';
    private const PASS_INCORRECT = 2; 

    public $type;
    public $color;
    private $pass;
    public $status;

    public function __construct($pass)
    {
        $this->color = 'Черная';
        $this->type  = 'Входная';
        $this->pass  = $pass;
    }
    
    public function open()
    {
        if($this->pass == self::PASS_OPEN){
            $this->status = self::OPEN;

            return true;
        }else {
            $this->status = self::PASS_INCORRECT;
            return false;
        }
    }

    public function close()
    {
        if($this->pass == self::PASS_CLOSE){
            $this->status = self::CLOSE;

            return true;
        }else {
            return false;
        }
    }
}