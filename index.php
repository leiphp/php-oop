<?php
/**
*入口文件
*1.定义常量
*2.加载函数库
*3.启动框架
*/

define('LEIPHP', realpath('./'));
define('CORE', LEIPHP.'/core');
define('APP',LEIPHP.'/app');
define('MODULE','app');
define('DEBUG',true);

include "vendor/autoload.php";

if(DEBUG){
    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();
    ini_set('display_error','on');
}else{
    ini_set('displey_error','off');
}
//dump($_SERVER);exit();//dump酷炫格式化
//ssssssssssa();//智能debug报错

include CORE.'/common/function.php';
include CORE.'/Leiphp.php';

spl_autoload_register('\core\Leiphp::load');
\core\Leiphp::run();
