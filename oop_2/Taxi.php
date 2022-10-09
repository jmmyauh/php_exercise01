<?php

require_once __DIR__ . '/Car.php';


class Taxi extends Car
{
    private $passenger;
    
    // public function __construct($carname,$number,$color)
    // {
    //     parent::__construct($carname,$number,$color);
    // }

    public function pickUp($count)
    {
        $this->passenger += $count;
        return $count . "人乗車しました\n";
        
    }

    public function lower($count)
    {
        $this->passenger -= $count;
        if ( $this->passenger > 0) {
            return $count. "人降車しました\n";
        }
        else {
            return $count . "人降車できません\n";
        }
    }
    public function information()
    {
        return '車の車種:' . $this->getName() . "\n" .
                '車体番号:' . $this->getNumber() . PHP_EOL .
                'カラー:' . $this->getColor() . PHP_EOL .
                '乗車人数:' . $this->passenger . "人\n";
    }
    
}


