<?php
function p($var){
    if(is_bool($var)){
        var_dump($var);
    }else if(is_null($var)){
        var_dump(NULL);
    }else{
        echo "<pre style='position:relative;z-index:1000;padding:10px;
        border-radius:5px;background:#f5f5f5;border:1px solid #aaa;font-size:14px;
        line-hieght:18px;opacity:0.9;'>".print_r($var, true)."</pre>";
    }
}

/**
 * @param $name 对应值
 * @param $default 默认值
 * @param $fitt 过滤方法 'int'
 */
function post($name, $default=false, $fitt=false){
    if(isset($_POST[$name])){
        if($fitt){
            switch ($fitt){
                case 'int':
                    if(is_numeric($_POST[$name])){
                        return $_POST[$name];
                    }else{
                        return $default;
                    }
                    break;
                default: ;
            }
        }else{
            return $_POST[$name];
        }
    }else{
        return $default;
    }
}

/**
 * @param $name 对应值
 * @param $default 默认值
 * @param $fitt 过滤方法 'int'
 */
function get($name, $default=false, $fitt=false){
    if(isset($_GET[$name])){
        if($fitt){
            switch ($fitt){
                case 'int':
                    if(is_numeric($_GET[$name])){
                        return $_GET[$name];
                    }else{
                        return $default;
                    }
                    break;
                default: ;
            }
        }else{
            return $_GET[$name];
        }
    }else{
        return $default;
    }
}
/**
 * @param $url 跳转的url
 */
function jump($url){
    header('location:'.$url);
    exit();
}
