<?php
//注册器模式
/**
 * Create by PhpStorm
 * User: 雷小天
 * Site: www.100txy.com
 * Date: 2019/11/12 0012
 * Time: 23:34
 */
namespace oop;

class Register
{
    protected static $objects;

    static function set($alias, $object){
        self::$objects[$alias] = $object;
    }
    static function get($name){
        return self::$objects[$name];
    }
    function _unset($alias){
        unset(self::$objects[$alias]);
    }

}
