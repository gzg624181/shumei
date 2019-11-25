<?php

namespace app\index\controller;

use app\common\controller\Frontend;
use think\Config;

class Index extends Frontend
{

    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = '';

    /**
     * @return string
     * @throws 网站首页
     */
    public function index()
    {
        //网站title，关键字keyword，网站简介description
        $index = [
               'title'      =>Config::get('site.title'),
               'keywords'   =>Config::get('site.keywords'),
               'description'=>Config::get('site.description')
        ];
        //首页logo图片地址，客服电话
        $top = [
               'logo'       =>Config::get('site.logo'),
               'hotline'    =>Config::get('site.hotline')
        ];
        //首页banner图片
        $banner = new \app\admin\model\Banner;
        $bannerlist = $banner::where('checkinfo',1)->order('id desc')->select();
        $this->assign('banner',$bannerlist);
        $this->assign('index',$index);
        $this->assign('top',$top);
        return $this->view->fetch();
    }

    /**
     * @return string
     * @throws 企业保险
     */
    public function qiye()
    {

        return $this->view->fetch();
    }

    /**
     * @return string
     * @throws 企业保险
     */
    public function help(){
        return $this->view->fetch();
    }

}
