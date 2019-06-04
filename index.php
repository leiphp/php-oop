<?php
/**
*入口文件
*1.定义常量
*2.加载函数库
*3.启动框架
*/

define('leiphp', realpath('./'));
define('core', leiphp.'/core');
define('app',leiphp.'/app');

define('debug',true);
if(debug){
    ini_set('display_error','on');
}else{
    ini_set('displey_error','off');
}

include core.'/common/function.php';
include core.'/Leiphp.php';

spl_autoload_register('\core\Leiphp::load');
\core\Leiphp::run();
