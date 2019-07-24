<?php
namespace app\controllers\controller;

use Qiniu\Auth;
use think\Config;
use Qiniu\Storage\UploadManager;
use think\Request;


class Common
{
    public function uploadFile(Request $request)
    {
        import('qiniu.autoload',VENDOR_PATH);

        // 获取表单上传文件 例如上传了001.jpg
        $file = $request->file('file');
        // 移动到框架应用根目录/public/uploads/ 目录下
        if($file){
            $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
            if($info){

                $config = Config::get('qiniu');
                $AccessKey = $config['AccessKey'];
                $SecretKey = $config['SecretKey'];
                $cfg = [
                    'access' => $AccessKey,
                    'secret' => $SecretKey,
                    'bucket' => 'pet-lizhipeng',
                    'domain' => 'http://images.yipinchongke.com'
                ];
                $auth = new Auth($AccessKey,$SecretKey);
                $bucket = 'pet-lizhipeng';
                $token = $auth->uploadToken($bucket);

                // 成功上传后 获取上传信息
                $filePath = './uploads/'.$info->getSaveName();
                $uploadMgr = new UploadManager();
                list($ret, $err) = $uploadMgr->putFile($token, null, $filePath);
                if($err !== null) {
                    return json(['code'=>1,'msg'=>$err]);
                } else {

                    return json(['code'=>0,'msg'=>'上传成功','data'=>['src'=>$cfg['domain'] . '/' . $ret['key'],'title'=>'']]);
                }
            }else{
                // 上传失败获取错误信息
                return json(['code'=>1,'msg'=>$this->err = $file->getError()]);
            }
        }








//        var_dump(1111);die;
    }
}
