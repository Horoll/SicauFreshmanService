<?php
namespace app\index\controller;
use think\Controller;

class Index extends Controller
{
    public function index()
    {
        $list = db('question')->where(1)->order('id desc')->paginate(10);
        $this->assign('list',$list);
        return $this->fetch('index');
    }

    public function commonquestion(){
        return $this->fetch('index/commonquestion');
    }

    public function answer(){
        if(input('?commit') && input('commit')=='1'){
            $email=input('email');
            $title=input('title');
            $comment=input('comment');
            $data = [
                'email'=>$email,
                'title'=>$title,
                'comment'=>$comment
            ];
            $rule = [
                ['email','require|email','邮箱不能为空|邮箱格式错误'],
                ['title','require|max:25','标题不能为空|标题最多不能超过25个字'],
                ['comment','require','问题内容不能为空']
            ];

            $result = $this->validate($data,$rule);
            // 验证失败 输出错误信息
            if(true !== $result){
                $this->error($result);
            }else{
                //存入数据库，跳转到首页
                db('question')->insert($data);
                $this->success('提问成功', 'index');
            }
        }

        return $this->fetch('index/answer');
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
        return $this->fetch('index/single');
    }

    public function download(){
        $file_url=input('file_url');
        $file_url=ROOT_PATH.'public/file/'.$file_url;
        $new_name=input('new_name');
        return  download($file_url,$new_name);
    }
}
