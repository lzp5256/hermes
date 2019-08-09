<?php
namespace app\event;

use app\base\controller\Base;
use app\model\Activity;

class ArticleHandles extends Base
{
    public function handlesCreateArticle($check_data)
    {
        $model = new Activity();
        $setData = $this->_setAddData($check_data);
        if(!($res = $model->toAdd($setData))){
            return $this->setReturnMsg('104');
        }
        return $this->setReturnMsg('200');
    }

    protected function _setAddData($data)
    {
        return [
            'uid'   => 39,
            'title' => $data['params']['title'],
            'type'  => 1,
            'content'  => $data['params']['content'],
            'abstract' => $data['params']['abstract'],
            'time'  => $data['params']['time'],
            'state' => 1,
            'created_at'=>date('Y-m-d H:i:s')
        ];
    }
}
