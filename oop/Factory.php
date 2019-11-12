<?php
//工厂模式
/**
 * Create by PhpStorm
 * User: 雷小天
 * Site: www.100txy.com
 * Date: 2019/11/12 0012
 * Time: 23:37
 */
namespace oop;

class Factory
{
    //工厂方法
    static function createDatebase(){
        $db = Database::getInstance();
        Register::set('db1',$db);//映射到注册模式中
        return $db;
    }

}
