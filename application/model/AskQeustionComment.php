<?php
namespace app\model;

use think\Model;

class AskQeustionComment extends Model
{
    protected $table = 'ask_question_comment';

    /**
     * 查找用户信息
     *
     * @param array $where 查询条件
     * @param string $field 查询字段 默认为全部
     * @param string $order 排序方式 默认id倒序
     * @param int $offset 查询页数
     * @param int $num 查询条
     *
     * @return array
     */
    public function selectAskComment($where,$offset=0,$num=1,$field='*',$order='uid desc')
    {
        return $this->where($where)->field($field)->order($order)->limit("$offset,$num")->select();
    }

    /**
     * 查询一条用户信息
     *
     * @param $where
     * @param $field
     * @return array|false|\PDOStatement|string|Model
     */
    public function findAskComment($where,$field='*')
    {
        return $this->where($where)->field($field)->find();
    }

    /**
     * 添加用户
     *
     * @param $data
     *
     * @return mixed
     */
    public function addAskComment($data)
    {
        $this->data($data);
        return $this->save();
    }

    /**
     * 更新用户
     *
     * @param $where
     * @param $data
     *
     * @return false|int
     */
    public function saveAskComment($where,$data)
    {
        return $this->where($where)->update($data);
    }

}
