<?php
//单例模式
/**
 * Create by PhpStorm
 * User: 雷小天
 * Site: www.100txy.com
 * Date: 2019/11/12 0012
 * Time: 23:53
 */

namespace oop;

class Database
{
    protected $db;
    private function __construct()
    {

    }
    static function getInstance(){
        if(self::$db){
            return self::$db;
        }else{
            self::$db = new self();
            return self::$db;
        }

    }
    function where($where){
        return $this;
    }
    function order($order){
        return $this;
    }
    function limit($limit){
        return $this;
    }

}
