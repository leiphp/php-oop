<?php
/**
 * Create by PhpStorm
 * User: leixiaotian
 * Date: 2019/6/6 0006
 * Time: 23:10
 */
namespace app\model;
use core\lib\model;

class articleModel extends model{

    public $table = 'article';
    public function lists(){
        $res = $this->select($this->table,'*');
        return $res;
    }
    public function getOne($id){
        $res = $this->get($this->table,'*',array('id'=>$id));
        dump($res);
    }
    public function setOne($id,$data){
        return $this->update($this->table,$data,array('id'=>$id));
    }
    public function delOne($id){
        return $this->delete($this->table,array('id'=>$id));
    }

}