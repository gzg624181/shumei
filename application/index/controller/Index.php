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

        //首页banner图片
        $banner = new \app\admin\model\Banner;
        $bannerlist = $banner::where('checkinfo',1)->order('id desc')->select();
        //合作伙伴
        $partners = new \app\admin\model\Partners;
        $partnerslist = $partners::where('switch',1)->order('id desc')->select();
        //首页推荐的新闻资讯
        $news = new \app\admin\model\News;
        $newslist = $news::where('switch',1)->order('id desc')->limit(4)->select();
        //首页意外险三条数据 category_id =7
        $goods = new \app\admin\model\Goods;
        $where = [
            'is_delete'=>0,
            'isIndex'  =>1,
            'category_id'=>7
        ];
        $accident = $goods::where($where)->order('id desc')->limit(3)->select();
        if($accident){
            foreach ($accident as $key=>$value){
                $accident[$key]['picarr']= explode(",",$value['images']);
            }
        }
        //首页老年险 category =8
        $where = [
            'is_delete'=>0,
            'isIndex'  =>1,
            'category_id'=>8
        ];
        $old = $goods::where($where)->order('id desc')->limit(3)->select();
        if($old){
           foreach ($old as $key=>$value){
               $old[$key]['picarr']= explode(",",$value['images']);
           }
        }
        //医疗保险 category =9
        $where = [
            'is_delete'=>0,
            'isIndex'  =>1,
            'category_id'=>9
        ];
        $medical = $goods::where($where)->order('id desc')->limit(3)->select();
        if($medical){
            foreach ($medical as $key=>$value){
                $medical[$key]['picarr']= explode(",",$value['images']);
            }
        }
        //健康保险 category =2
        $where = [
            'is_delete'=>0,
            'isIndex'  =>1,
            'category_id'=>2
        ];
        $health  = $goods::where($where)->order('id desc')->limit(3)->select();
        if($health){
            foreach ($health as $key=>$value){
                $health[$key]['picarr']= explode(",",$value['images']);
            }
        }
        $this->assign('banner',$bannerlist);
        $this->assign('partners',$partnerslist);
        $this->assign('news',$newslist);
        $this->assign('accident',$accident);
        $this->assign('old',$old);
        $this->assign('medical',$medical);
        $this->assign('health',$health);
        $this->assign('common',self::common());
        return $this->view->fetch();
    }

    /**
     * qiye
     * 企业保险
     */
    public function qiye()
    {
        $this->assign('common',self::common());
        return $this->view->fetch();
    }

    /**
     * help
     * 帮助中心
     */
    public function help(){
        $this->assign('common',self::common());
        return $this->view->fetch();
    }

    /**
     * common
     * 头部和底部公共调用信息
     * 友情链接,版权信息
     * 头部导航
     * 搜索框
     * 客服电话
     * 顶部tag
     */
    public function common(){

        //友情链接
        $lnk = new \app\admin\model\Lnk;
        $lnklist = $lnk::where('checkinfo',1)->order('weigh desc')->select();
        //首页logo图片地址，客服电话
        $top = [
            'logo'       =>Config::get('site.logo'),
            'hotline'    =>Config::get('site.hotline')
        ];
        //网站title，关键字keyword，网站简介description
        $index = [
            'title'      =>Config::get('site.title'),
            'keywords'   =>Config::get('site.keywords'),
            'description'=>Config::get('site.description')
        ];
        $data = [
            'link'=>$lnklist,
            'copyright'=>Config::get('site.copyright'),  //版权信息
            'icp'=>Config::get('site.icp'),               //备案信息
            'top'=>$top,
            'index'=>$index
        ];
        return $data;
    }

}
