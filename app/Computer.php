<?php
class Computer{
    public $cpu = 'amd 5000';
    public $mainboard = '华硕9000x';
    private $hd = 500;

    public function game($gameName=''){
        if($this->getHdSize()<1024){
            echo "硬盘太小玩不了游戏";
            return false;
        }
        echo true;
    }
    public function job($work = '写代码'){
        echo($this->game());
    }
    private function getHdSize(){
        return $this->hd;
    }
}
//实例
$computer = new Computer();
$computer->game();
// var_dump($computer);
