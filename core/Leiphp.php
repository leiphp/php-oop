<?php
//核心文件
namespace core;

class Leiphp{
    public static $classMap = array();
    public static function run(){
        p('ok');
        $route = new \core\lib\route();
    }
    public static function load($class){
        //自动加载类库
        //new \core\route();
        //$class = '\core\route';
        //leiphp.'/core/route.php';
        if(isset($classMap[$class])){
            return true;
        }else {
            $class = str_replace('\\','/',$class);
            $file = leiphp.'/'.$class.'.php';
            if(is_file($file)){
                include $file;
                self::$classMap[$class] = $class;
            }else{
                return false;
            }
        }
    }
}
