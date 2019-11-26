define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'goods/index' + location.search,
                    add_url: 'goods/add',
                    edit_url: 'goods/edit',
                    del_url: 'goods/del',
                    multi_url: 'goods/multi',
                    table: 'goods',
                }
            });

            var table = $("#table");

            // 初始化表格
            table.bootstrapTable({
                url: $.fn.bootstrapTable.defaults.extend.index_url,
                pk: 'id',
                sortName: 'goods_sort',
                columns: [
                    [
                        {checkbox: true},
                        {field: 'id', title: __('Id')},
                        {field: 'goods_name', title: __('Goods_name')},
                        {field: 'category.name', title: __('Category.name'),operate:'LIKE'},
                        {field: 'images', title: __('Images'), events: Table.api.events.image, formatter: Table.api.formatter.images},
                        {field: 'classess', title: __('Classess')},
                        {field: 'price', title: __('Price'), operate:'BETWEEN'},
                        {field: 'sales_ku', title: __('Sales_ku')},
                        {field: 'sales_actual', title: __('Sales_actual')},
                        {field: 'goods_status', title: __('Goods_status'), searchList: {"10":__('Goods_status 10'),"20":__('Goods_status 20')}, formatter: Table.api.formatter.status},
                        {field: 'is_delete', title: __('Is_delete'), searchList: {"0":__('Is_delete 0'),"1":__('Is_delete 1')}, formatter: Table.api.formatter.normal},
                        {field: 'isIndex', title: __('Isindex'), searchList: {"0":__('Isindex 0'),"1":__('Isindex 1')}, formatter: Table.api.formatter.normal},
                        {field: 'operate', title: __('Operate'), table: table, events: Table.api.events.operate, formatter: Table.api.formatter.operate}
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