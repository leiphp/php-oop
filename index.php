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

if(DEBUG){
    ini_set('display_error','on');
}else{
    ini_set('displey_error','off');
}

include CORE.'/common/function.php';
include CORE.'/Leiphp.php';

spl_autoload_register('\core\Leiphp::load');
\core\Leiphp::run();
