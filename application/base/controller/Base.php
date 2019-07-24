<?php
/**
 * Created by PhpStorm.
 * User: lizhipeng
 * Date: 2019/1/2
 * Time: 3:12 PM
 */
namespace app\base\controller;

use app\wechat\model\Token;
use app\helper\message;
use think\Exception;

class Base
{
    // 储存数据
    protected $data = [];

    public function setData($setData)
    {
        $this->data = $setData;
        return $this;
    }

    /**
     * 生成用户token
     * @param $data 用户session_key
     * @return string
     */
    public function encryption($data)
    {
        return md5($data.rand(0,9).time());
    }

    public function setReturnMsg($code,$data = [] ){
        $message = new message();
        return ['errCode'=>$code,'errMsg' =>$message::$message[$code],'data' => $data];
    }


}