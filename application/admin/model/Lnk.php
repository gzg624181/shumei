<?php

namespace app\admin\model;

use think\Model;


class Lnk extends Model
{

    

    

    // 表名
    protected $name = 'lnk';
    
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = false;

    // 定义时间戳字段名
    protected $createTime = false;
    protected $updateTime = false;
    protected $deleteTime = false;

    // 追加属性
    protected $append = [
        'checkinfo_text',
        'creattime_text'
    ];
    

    protected static function init()
    {
        self::afterInsert(function ($row) {
            $pk = $row->getPk();
            $row->getQuery()->where($pk, $row[$pk])->update(['weigh' => $row[$pk]]);
        });
    }

    
    public function getCheckinfoList()
    {
        return ['1' => __('Checkinfo 1'), '0' => __('Checkinfo 0')];
    }


    public function getCheckinfoTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['checkinfo']) ? $data['checkinfo'] : '');
        $list = $this->getCheckinfoList();
        return isset($list[$value]) ? $list[$value] : '';
    }


    public function getCreattimeTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['creattime']) ? $data['creattime'] : '');
        return is_numeric($value) ? date("Y-m-d H:i:s", $value) : $value;
    }

    protected function setCreattimeAttr($value)
    {
        return $value === '' ? null : ($value && !is_numeric($value) ? strtotime($value) : $value);
    }


}
