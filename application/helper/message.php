<?php
namespace app\helper;

class message
{
    public static $message = [

        /*成功*/
        '200'   =>  '成功',

        /*系统异常返回*/
        '500'   =>  '请求处理失败',
        '502'   =>  '服务器异常,处理失败',

        /*基本验证*/
        '100'   =>  '参数错误',
        '101'   =>  '用户信息获取失败',
        '102'   =>  '任务信息获取失败',
        '103'   =>  '更新失败',
        '104'   =>  '添加失败',

        '00001' => '文章标题不能为空',
        '00002' => '文章类型不能为空',
        '00003' => '文章作者不能为空',
        '00004' => '文章时间不能为空',
        '00005' => '文章摘要不能为空',
        '00006' => '文章内容不能为空',

        '00007' => '请选择是否收费',
        '00008' => '请选择宠物来源',
        '00009' => '请选择宠物毛发',
        '00010' => '请选择宠物体型',
        '00011' => '请选择宠物是否打疫苗',
        '00012' => '请选择宠物是否绝育',
        '00013' => '请选择宠物是否驱虫',
        '00014' => '请输入宠物描述',
        '00015' => '描述字数不能超过100字',
        '00016' => '请输入联系人微信',
        '00017' => '请输入联系人手机号',
        '00018' => '手机号长度错误',
        '00019' => '手机号格式错误',
        '00020' => '请选择所在城市',
        '00021' => '请输入详细地址',
        '00022' => '请选择是否展示微信号',
        '00023' => '请选择是否展示手机号',
        '00024' => '请选择是否开启消息通知',
        '00025' => '添加失败,请联系客服',
        '00026' => '系统异常,未获取到详情ID',
        '00027' => '系统异常,未获取到详情数据',
        '00028' => '请至少上传3张图片',
        '00029' => '请输入标题',
        '00030' => '请输入内容',
        '00031' => '请输入至少5个字的标题',
        '00032' => '请输入至少20个字的内容',
        '00033' => '抱歉,内容不能超过600个字',
        '00034' => '抱歉,发布失败,请稍后再试',
        '00035' => '请上传图片',
        '00036' => '请至少上传1张图片',
        '00037' => '系统异常,未获取到详情ID',
        '00038' => '抱歉,未查询到详情信息',
        '00039' => '抱歉,未获取到当前页数',
        '00040' => '抱歉,暂无数据',
        '00041' => '系统异常,未获取到用户ID',
        '00042' => '系统异常,未获取到任务ID',

        /** ask */
        '200001' => '系统异常,请联系客服',
        '200002' => '问题标题不能为空',
        '200003' => '问题创建失败',
        '200004' => '分页信息获取失败,请稍后再试',
        '200005' => '暂无数据',
        '200006' => '添加失败',
        '200007' => '用户获取失败,请稍后再试',
        '200008' => '评论内容不能为空',
        '200009' => '评论内容不能少于5个字符',
        '200010' => '未获取到问题信息',
        '200011' => '未获取到用户信息',
        '200012' => '数据更新失败',

        /** rc */
        '300001' => '请输入正确名称',
        '300002' => '没有找到您要的结果',
        '300003' => '',
    ];
}