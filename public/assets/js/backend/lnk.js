define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'lnk/index' + location.search,
                    add_url: 'lnk/add',
                    edit_url: 'lnk/edit',
                    del_url: 'lnk/del',
                    multi_url: 'lnk/multi',
                    table: 'lnk',
                }
            });

            var table = $("#table");

            // 初始化表格
            table.bootstrapTable({
                url: $.fn.bootstrapTable.defaults.extend.index_url,
                pk: 'id',
                sortName: 'weigh',
                columns: [
                    [
                        {checkbox: true},
                        {field: 'id', title: __('Id')},
                        {field: 'lnkname', title: __('Lnkname')},
                        {field: 'lnkurl', title: __('Lnkurl'), formatter: Table.api.formatter.url},
                        {field: 'weigh', title: __('Weigh')},
                        {field: 'checkinfo', title: __('Checkinfo'), searchList: {"1":__('Checkinfo 1'),"0":__('Checkinfo 0')}, formatter: Table.api.formatter.normal},
                        {field: 'creattime', title: __('Creattime'), operate:'RANGE', addclass:'datetimerange', formatter: Table.api.formatter.datetime},
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