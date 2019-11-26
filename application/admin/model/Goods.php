<?php

namespace app\admin\model;

use think\Model;


class Goods extends Model
{


    // 表名
    protected $name = 'goods';
    
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';

    // 定义时间戳字段名
    protected $createTime = 'createtime';
    protected $updateTime = 'updatetime';
    protected $deleteTime = false;

    // 追加属性
    protected $append = [
        'goods_status_text',
        'is_delete_text',
        'isIndex_text'
    ];
    

    protected static function init()
    {
        self::afterInsert(function ($row) {
            $pk = $row->getPk();
            $row->getQuery()->where($pk, $row[$pk])->update(['goods_sort' => $row[$pk]]);
        });
    }

    
    public function getGoodsStatusList()
    {
        return ['10' => __('Goods_status 10'), '20' => __('Goods_status 20')];
    }

    public function getIsDeleteList()
    {
        return ['0' => __('Is_delete 0'), '1' => __('Is_delete 1')];
    }

    public function getIsindexList()
    {
        return ['0' => __('Isindex 0'), '1' => __('Isindex 1')];
    }


    public function getGoodsStatusTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['goods_status']) ? $data['goods_status'] : '');
        $list = $this->getGoodsStatusList();
        return isset($list[$value]) ? $list[$value] : '';
    }


    public function getIsDeleteTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['is_delete']) ? $data['is_delete'] : '');
        $list = $this->getIsDeleteList();
        return isset($list[$value]) ? $list[$value] : '';
    }


    public function getIsindexTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['isIndex']) ? $data['isIndex'] : '');
        $list = $this->getIsindexList();
        return isset($list[$value]) ? $list[$value] : '';
    }




    public function category()
    {
        return $this->belongsTo('Category', 'category_id', 'id', [], 'LEFT')->setEagerlyType(0);
    }
}
