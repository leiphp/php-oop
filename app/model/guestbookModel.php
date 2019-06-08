<?php
/**
 * Create by PhpStorm
 * User: leixiaotian
 * Date: 2019/6/8 0008
 * Time: 17:52
 */
namespace app\model;
use core\lib\model;

class guestbookModel extends model{

    public $table = 'guestbook';

    public function all(){
        return $this->select($this->table, '*');
    }
    public function addOne($data){
        return $this->insert($this->table, $data);
    }
    public function delOne($id){
        $res =  $this->delete($this->table, array('id'=>$id));
        if($res!==false){
            return true;
        }else{
            return false;
        }
    }
}