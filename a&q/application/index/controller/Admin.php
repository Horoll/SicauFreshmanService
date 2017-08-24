<?php
namespace app\index\controller;
use think\Controller;
use think\Cookie;

class Admin extends Controller
{
    protected $beforeActionList = [
        'checkAuthority' =>  ['except'=>'login,logout']
    ];

    public function checkAuthority(){
        if(!Cookie::has('admin')){
            $this->error('没有访问权限！');
        }
    }

    public function index()
    {
        $list = db('question')->where(1)->order('id desc')->paginate(10);
        $this->assign('list',$list);
        return $this->fetch('index');
    }

    public function single($id=null){
        if(!input('?id')){
            $this->error('非法访问');
        }
        $question = db('question')->where('id',$id)->find();
        if($question==null){
            $this->error('该问题不存在');
        }
        $this->assign('question',$question);
        return $this->fetch('admin/single');
    }

    public function delete($id=null){
        if(db('question')->delete($id)){
            $this->success('删除问题成功');
        }
    }

    public function submit($id=null,$comment=null){
        db('question')->where('id',$id)->update(['answer'=>$comment]);
        $this->success('回答成功！',url('admin/single','id='.$id));
    }

    public function login(){
        if(input('?login')&&input('login')=='login'){
            $admin = db('admin')->where('adminname',input('adminname'))->find();
            if($admin==null){
                $this->error('帐号不存在');
            }else{
                if(md5(input('password'))==$admin['password']){
                    Cookie::forever('admin',$admin['adminname']);
                    $this->success('登录成功','admin/index');
                }else{
                    $this->error('密码错误！');
                }
            }
        }
        return $this->fetch('admin/login');
    }
    public function logout(){
        cookie('admin',null);
        $this->success('已退出登录','index/index');
    }
}
