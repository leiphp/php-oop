<?php
//核心文件
namespace core;

class Leiphp{
    public static $classMap = array();
    public $assign;
    public static function run(){
//        p('ok');
        $route = new \core\lib\route();
        $ctrlClass = $route->ctrl;
        $action = $route->action;
        $ctrlfile = APP.'/ctrl/'.$ctrlClass.'Ctrl.php';
        $ctrlClass = '\\'.MODULE.'\ctrl\\'.$ctrlClass.'Ctrl';
        if(is_file($ctrlfile)){
            include $ctrlfile;
            $ctrl =  new $ctrlClass;
            $ctrl->$action();
        }else{
            throw new \Exception('找不到控制器'.$ctrlClass);
        }
//        p($route);
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
            $file = LEIPHP.'/'.$class.'.php';
            if(is_file($file)){
                include $file;
                self::$classMap[$class] = $class;
            }else{
                return false;
            }
        }
    }
    public function assign($name, $value){
        $this->assign[$name] = $value;

    }
    public function display($file){
        $file = APP.'/views/'.$file;
        if(is_file($file)){
            extract($this->assign);
            include $file;
        }
    }
}
