<?php

class Car
{
    private $carname;
    private $number;
    private $color;
    public function __construct($carname, $number, $color)
    {
        $this->carname = $carname;
        $this->number = $number;
        $this->color = $color;

    }

    public function getName()
    {
        return $this->carname;
    }
    public function getNumber()
    {
        return $this->number;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function information()
    {
        return '車の車種:' . $this->carname . "\n" .
                '車体番号:' . $this->number . PHP_EOL .
                'カラー:' . $this->color . PHP_EOL;
    }
    public function setName($carname)
    {
        $this->carname = $carname;
    }
    public function setNumber($number)
    {
        $this->number = $number;
    }
    public function setColor($color)
    {
        $this->color = $color;
    }
}

