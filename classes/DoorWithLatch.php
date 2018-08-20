<?php

class DoorWithLatch extends Door 
{
    public $type;
    public $color;
    public $data;
    public $status;


    public function __construct($data)
    {
        $this->color = 'Зеленая';
        $this->type  = 'Межкомнатная';
        $this->data  = $data;
    }

    public function open()
    {
        if ($this->data == self::OPEN){
            $this->status = self::OPEN;

            return true;
        } else{
            if($this->close()){
                return false;
            }
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
