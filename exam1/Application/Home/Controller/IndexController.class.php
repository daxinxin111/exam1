<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index()
    {
    	//模板展示
        $this->display('insert');
    }

    public function do_insert()
    {
    	//接值
       $data['title']=I('title');
       $data['content']=I('content');
       $data['author']=I('author');
       //添加数据
       $res=M("message")->add($data);
       //判断
       if($res){
       	   $this->success('添加成功','Index/show',3);
       }else{
       	   $this->error('添加失败','Index/insert',3);
       }
    }

    public function show()
    {
    	//查询
    	$list=M("message")->select();
    	$this->assign("list",$list);
    	$this->display("show");
    }
}