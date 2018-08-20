<?php 

class Factory 
{
    private $data;

    public function createClass($className , $data)
    {
        switch($className){
            case "DoorWithElectronicLock": 
                return new DoorWithElectronicLock($data);
                break;
            case "DoorWithMechanicalLock": 
                return new DoorWithMechanicalLock($data);
                break;
            case "DoorWithLatch": 
                return new DoorWithLatch($data);
                break;
            default: throw new Exception("Error type");
        }
    }
}