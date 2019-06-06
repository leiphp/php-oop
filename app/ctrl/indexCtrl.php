<?php
/**
 * Create by PhpStorm
 * User: leixiaotian
 * Date: 2019/6/5 0005
 * Time: 23:36
 */
namespace app\ctrl;

class indexCtrl extends \core\Leiphp{
    public function index(){
//        //模型类start
//        p('it is index');
//        $model = new \core\lib\model();
//        $sql = "select * from article";
//        $res = $model->query($sql);
//        p($res->fetchAll());
//        //模型类end
//        $temp = \core\lib\conf::get('CTRL','route');
//        $temp = \core\lib\conf::get('ACTION','route');
        $temp = new \core\lib\model();
        print_r($temp);
        $title = '视图文件';
        $data = 'Hello World';
        $this->assign('title',$title);
        $this->assign('data',$data);
        $this->display('index.html');
    }
}