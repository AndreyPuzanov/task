<?php

abstract class Door implements OpenClose
{
    protected const CLOSE = 0;
    protected const OPEN = 1;

    public function initStatus()
    {
        if($this->open()){
            return $this->status;
        }else {
        	if($this->close()){
                return $this->status;
            }else {
                return $this->status;
            }
        }
    }
}

