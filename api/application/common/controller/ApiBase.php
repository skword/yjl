<?php
/**
 * Created by PhpStorm.
 * User: �ٺ�<skwordss@163.com>
 * Date: 2019/5/20 0020
 * Time: 23:59
 */
namespace app\common\controller;

use EasyWeChat\Factory;
use think\App;
use think\Controller;

/**
 * Class ApiBase �ӿ�ҵ�������
 * @package app\common\controller
 */
class ApiBase extends Controller
{
    /**
     * @var
     * @internal ����ʵ����Factory::miniProgram��ʵ��
     */
    protected $WeChat;

    /**
     * ApiBase constructor.
     * @param App|null $app
     */
    public function __construct(App $app = null)
    {
        parent::__construct($app);
        $this->WeChat = Factory::miniProgram(config('wechat.mini_program.program'));
    }


}