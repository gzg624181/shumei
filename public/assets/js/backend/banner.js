define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'banner/index' + location.search,
                    add_url: 'banner/add',
                    edit_url: 'banner/edit',
                    del_url: 'banner/del',
                    multi_url: 'banner/multi',
                    table: 'banner',
                } //方法url对应到controller的函数，可以根据自己需要去controller里重写，这里默认是使用的基类函数
            });

            var table = $("#table");

            // 初始化表格
            table.bootstrapTable({
                url: $.fn.bootstrapTable.defaults.extend.index_url,
                pk: 'id', //这个是主键
                sortName: 'id', //这个是根据排序的字段
                columns: [
                    [
                        {checkbox: true}, //这个对应每条数据前面的勾选框
                        {field: 'id', title: __('Id')},//这里就是具体的数据，field是字段名，title是标题
                        {field: 'title', title: __('Title')},
                        // {field: 'pic', title: __('Pic')},
                        {field: 'pic', title: __('Pic'), events: Table.api.events.image, formatter: Table.api.formatter.image},
                        {field: 'linkurl', title: __('Linkurl'), formatter: Table.api.formatter.url},
                        {field: 'createtime', title: __('Createtime'), operate:'RANGE', addclass:'datetimerange', formatter: Table.api.formatter.datetime},
                        {field: 'checkinfo', title: __('Checkinfo'), searchList: {"1":__('Checkinfo 1'),"0":__('Checkinfo 0')}, formatter: Table.api.formatter.normal},
                        {field: 'operate', title: __('Operate'), table: table, events: Table.api.events.operate, formatter: Table.api.formatter.operate}
                        //这个是操作列
                    ]
                ]
            });

            // 为表格绑定事件
            Table.api.bindevent(table);
        },
        add: function () {
            Controller.api.bindevent();
        },
        edit: function () {
            Controller.api.bindevent();
        },
        api: {
            bindevent: function () {
                Form.api.bindevent($("form[role=form]"));
            }
        }
    };
    return Controller;
});