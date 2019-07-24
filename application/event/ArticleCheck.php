<?php
namespace app\event;

use app\base\controller\Base;

class ArticleCheck extends Base
{
    public function checkCreateArticleParams($params)
    {

        if(!is_array($params) || empty($params)){
            return $this->setReturnMsg('100');
        }

        if(empty($params['title'])){
            return $this->setReturnMsg('00001');
        }
        $this->data['params']['title'] = (string)$params['title'];

//        if(empty($params['type'])){
//            return $this->setReturnMsg('00002');
//        }
//        $this->data['params']['type'] = (int)$params['type'];

        if(empty($params['author'])){
            return $this->setReturnMsg('00003');
        }
        $this->data['params']['author'] = (string)$params['author'];

        if(empty($params['time'])){
            return $this->setReturnMsg('00004');
        }
        $this->data['params']['time'] = (string)$params['time'];

        if(empty($params['abstract'])){
            return $this->setReturnMsg('00005');
        }
        $this->data['params']['abstract'] = (string)$params['abstract'];

        if(empty($params['content'])){
            return $this->setReturnMsg('00006');
        }
        $this->data['params']['content'] = (string)$params['content'];

        return $this->setReturnMsg('200',$this->data);
    }
}