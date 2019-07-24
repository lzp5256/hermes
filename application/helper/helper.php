<?php
namespace app\helper;

trait helper {

    /**
     * @var \think\View 视图类实例
     */
    protected $_view;

    public function setView($router){
       $this->_view = APP_PATH.'view/'.$router.'.html';
    }

}
