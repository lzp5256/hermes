<?php
namespace app\controllers\controller;

use app\event\ArticleCheck;
use app\event\ArticleHandles;
use app\helper\helper;
use think\Controller;
use think\Db;

class Article extends Controller
{
    use helper;

    /**
     * 获取文章列表
     *
     * @return mixed
     * @throws \think\exception\DbException
     */
    public function getArticleList()
    {
        $list = [];
        $data  = Db::name('article')
            ->where('state','1')
            ->order('id desc')
            ->paginate(10);
        $page  = $data->render();
        if(!empty($data)){
            foreach ($data as $k => $v){
                $list[$k] = $v;
            }
        }
        foreach ($list as $k => $v){
            $list[$k]['time'] = date('Y-m-d',strtotime($v['time']));
            $list[$k]['examine'] = getExamineStr($v['examine']);
        }

        $this->assign('page', $page);
        $this->assign('list',$list);
        $this->setView('article/list');

        return $this->fetch($this->_view);
    }

    public function getArticleInfoAction()
    {
        $info  = [];
        $param = request()->param('');
        if(!empty($param) && $param[0] =='id' && $param[1]>0){
            $info = Db::name('article')
                ->where('state','1')
                ->where('id',$param[1])
                ->order('id desc')
                ->find();
        }

        $this->assign('info',$info);
        $this->setView('article/info');
        return $this->fetch($this->_view);
    }

    /**
     * 获取添加文章页面
     *
     * @return mixed
     */
    public function getAddArticleView()
    {
        $this->setView('article/add');
        return $this->fetch($this->_view);
    }

    /**
     * 创建新的文章
     *
     * @return \think\response\Json
     */
    public function createArticleAction()
    {
        $return = [
            'errCode' => 200,
            'errMsg'  => '创建成功',
            'data'    => [],
        ];
        $check_event = new ArticleCheck();
        $handles_event = new ArticleHandles();
        $params = request()->post();

        if(($check_res = $check_event->checkCreateArticleParams($params)) && $check_res['errCode'] != 200){
            return json($check_res);
        }
        if(($handles_res = $handles_event->handlesCreateArticle($check_res['data'])) && $handles_res['errCode'] != 200){
            return json($handles_res);
        }

        return json($return);
    }

    /**
     * exArticleView | 文章审核页面
     */
    public function exArticleView(){
        $this->setView('article/add');
        return $this->fetch($this->_view);
    }
}
