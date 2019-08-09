<?php
namespace app\controllers\controller;

use app\helper\helper;
use app\model\User;
use think\Db;
use think\Controller;

class Member extends Controller
{
    use helper;

    public function getMemberList()
    {
        $list = [];
        $model = new User();
        // $data  = $model->getPageList(['status'=>1],0,10);
        $data  = Db::name('user')->where('status','1')->order('id desc')->paginate(10);
        $page  = $data->render();
        if(!empty($data)){
            foreach ($data as $k => $v){
                $list[$k] = $v;
            }
        }
        foreach ($list as $k => $v){
            $list[$k]['name'] = $v['name'];
        }

        $this->setView('member/member_list');
        $this->assign('page', $page);
        $this->assign('list',$list);

        return $this->fetch($this->_view);
    }
}
