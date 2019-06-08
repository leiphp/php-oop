<?php
/**
 * Create by PhpStorm
 * User: leixiaotian
 * Date: 2019/6/5 0005
 * Time: 23:36
 */
namespace app\ctrl;

use core\lib\model;
use app\model\guestbookModel;

class indexCtrl extends \core\Leiphp{
    //所有留言
    public function index(){
        $model = new guestbookModel();
        $data = $model->all();
        $this->assign('data', $data);
        $this->display('index.html');
    }
    //添加留言
    public function add(){
        $this->display('add.html');
    }
    //报错留言
    public function save(){

        $data['title'] = post('title');
        $data['content'] = post('content');
        $data['createtime'] = time();
        $model = new guestbookModel();
        $res = $model->addOne($data);
        if($res){
//            echo 'ok';
            jump('/');
        }else{
            echo 'error';
        }

    }
    //删除留言
    public function del(){
        $id = get('id',0,'int');
        if($id){
            $model = new guestbookModel();
            $res = $model->delOne($id);
            if($res){
                jump('/');
            }else{
                exit('删除失败');
            }
        }else{
            exit('参数错误');
        }

//        p($id);
    }
//    public function index(){
//        $data = 'Hello World';
//        $this->assign('data',$data);
//        $this->display('index.html');
//        $model = new \app\model\articleModel();
//        $res = $model->lists();
//        $res = $model->getOne(5);
//        $data = array('name'=>'pip','ctime'=>time());
//        $res = $model->setOne(5,$data);
//        $res = $model->delOne(4);
//        dump($res);

//        //模型类start
//        p('it is index');
//        $model = new \core\lib\model();
//        $sql = "select * from article";
//        $res = $model->query($sql);
//        p($res->fetchAll());
//        //模型类end
//        $temp = \core\lib\conf::get('CTRL','route');
//        $temp = \core\lib\conf::get('ACTION','route');

//        $temp = new \core\lib\model();
//        print_r($temp);
//        $title = '视图文件';
//        $data = 'Hello World';
//        $this->assign('title',$title);
//        $this->assign('data',$data);
//        $this->display('index.html');

//        $model = new model();
//        dump($model);
        /**
         * select($table,$columns,$where)
         * insert($table,$data)
         */


//        $data = $model->select('article','*');
//        $data = array(
//            'name'=>'python',
//            'ctime'=>time()
//        );
//        $res = $model->insert('article',$data);
//        dump($res);
//    }
    public function test(){
        $data = 'test';
        $this->assign('data',$data);
        $this->display('test.html');
    }
}