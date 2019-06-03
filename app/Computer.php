<?php
class Computer{
    public $cpu = 'amd 5000';
    public $mainboard = '华硕9000x';
    private $hd = 1024;
}
//实例
$computer = new Computer();

var_dump($computer);
