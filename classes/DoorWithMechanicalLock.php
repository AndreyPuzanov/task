<?php

class DoorWithMechanicalLock extends Door 
{   
    public $type;
    public $color;
    public $status;
    public $data;

    public function __construct($data)
    {
        $this->color = 'Серая';
        $this->type  = 'Входная';
        $this->data  = $data;
    }

    public function open()
    {
        if($this->data == self::OPEN){
            $this->status = self::OPEN;
            
            return true;
        }else {
            return false;
        }
    }

    public function close()
    {
        if($this->data == self::CLOSE){
            $this->status = self::CLOSE;
            return true;
        }
    }
}