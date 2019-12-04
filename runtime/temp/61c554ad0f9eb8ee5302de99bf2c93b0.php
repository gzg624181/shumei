<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:83:"D:\phpStudy\PHPTutorial\WWW\shumei\public/../application/admin\view\goods\edit.html";i:1575441564;s:77:"D:\phpStudy\PHPTutorial\WWW\shumei\application\admin\view\layout\default.html";i:1574656895;s:74:"D:\phpStudy\PHPTutorial\WWW\shumei\application\admin\view\common\meta.html";i:1574656895;s:76:"D:\phpStudy\PHPTutorial\WWW\shumei\application\admin\view\common\script.html";i:1574656895;}*/ ?>
<!DOCTYPE html>
<html lang="<?php echo $config['language']; ?>">
    <head>
        <meta charset="utf-8">
<title><?php echo (isset($title) && ($title !== '')?$title:''); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit">

<link rel="shortcut icon" href="/shumei/public/assets/img/favicon.ico" />
<!-- Loading Bootstrap -->
<link href="/shumei/public/assets/css/backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
  <script src="/shumei/public/assets/js/html5shiv.js"></script>
  <script src="/shumei/public/assets/js/respond.min.js"></script>
<![endif]-->
<script type="text/javascript">
    var require = {
        config:  <?php echo json_encode($config); ?>
    };
</script>
    </head>

    <body class="inside-header inside-aside <?php echo defined('IS_DIALOG') && IS_DIALOG ? 'is-dialog' : ''; ?>">
        <div id="main" role="main">
            <div class="tab-content tab-addtabs">
                <div id="content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <section class="content-header hide">
                                <h1>
                                    <?php echo __('Dashboard'); ?>
                                    <small><?php echo __('Control panel'); ?></small>
                                </h1>
                            </section>
                            <?php if(!IS_DIALOG && !$config['fastadmin']['multiplenav']): ?>
                            <!-- RIBBON -->
                            <div id="ribbon">
                                <ol class="breadcrumb pull-left">
                                    <li><a href="dashboard" class="addtabsit"><i class="fa fa-dashboard"></i> <?php echo __('Dashboard'); ?></a></li>
                                </ol>
                                <ol class="breadcrumb pull-right">
                                    <?php foreach($breadcrumb as $vo): ?>
                                    <li><a href="javascript:;" data-url="<?php echo $vo['url']; ?>"><?php echo $vo['title']; ?></a></li>
                                    <?php endforeach; ?>
                                </ol>
                            </div>
                            <!-- END RIBBON -->
                            <?php endif; ?>
                            <div class="content">
                                <form id="edit-form" class="form-horizontal" role="form" data-toggle="validator" method="POST" action="">

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Goods_name'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-goods_name" data-rule="required" class="form-control" name="row[goods_name]" type="text" value="<?php echo htmlentities($row['goods_name']); ?>">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Category_id'); ?>:</label>
        <div class="col-xs-12 col-sm-8">

            <input id="c-category_id"  data-rule="required" data-source="category/selectpage" data-params='{"custom[type]":"page"}' class="form-control selectpage" name="row[category_id]" type="text" value="<?php echo htmlentities($row['category_id']); ?>">
        </div>
    </div>


    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Images'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <div class="input-group">
                <input id="c-images" data-rule="required" class="form-control" size="50" name="row[images]" type="text" value="<?php echo htmlentities($row['images']); ?>">
                <div class="input-group-addon no-border no-padding">
                    <span><button type="button" id="plupload-images" class="btn btn-danger plupload" data-input-id="c-images" data-mimetype="image/gif,image/jpeg,image/png,image/jpg,image/bmp,image/ico" data-multiple="true" data-preview-id="p-images"><i class="fa fa-upload"></i> <?php echo __('Upload'); ?></button></span>
                    <span><button type="button" id="fachoose-images" class="btn btn-primary fachoose" data-input-id="c-images" data-mimetype="image/*" data-multiple="true"><i class="fa fa-list"></i> <?php echo __('Choose'); ?></button></span>
                </div>
                <span class="msg-box n-right" for="c-images"></span>
            </div>
            <ul class="row list-inline plupload-preview" id="p-images"></ul>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Classess'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-classess" class="form-control" name="row[classess]" type="text" value="<?php echo htmlentities($row['classess']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Tags'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-tags" class="form-control" name="row[tags]" type="text" value="<?php echo htmlentities($row['tags']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Content'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <textarea id="c-content" data-rule="required" class="form-control editor" rows="5" name="row[content]" cols="50"><?php echo htmlentities($row['content']); ?></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Price'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-price" data-rule="required" class="form-control" name="row[price]" type="number" value="<?php echo htmlentities($row['price']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Sales_ku'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-sales_ku" data-rule="required" class="form-control" name="row[sales_ku]" type="number" value="<?php echo htmlentities($row['sales_ku']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Sales_actual'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-sales_actual" data-rule="required" class="form-control" name="row[sales_actual]" type="number" value="<?php echo htmlentities($row['sales_actual']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Goods_sort'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-goods_sort" data-rule="required" class="form-control" name="row[goods_sort]" type="number" value="<?php echo htmlentities($row['goods_sort']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Goods_status'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
                        
            <select  id="c-goods_status" data-rule="required" class="form-control selectpicker" name="row[goods_status]">
                <?php if(is_array($goodsStatusList) || $goodsStatusList instanceof \think\Collection || $goodsStatusList instanceof \think\Paginator): if( count($goodsStatusList)==0 ) : echo "" ;else: foreach($goodsStatusList as $key=>$vo): ?>
                    <option value="<?php echo $key; ?>" <?php if(in_array(($key), is_array($row['goods_status'])?$row['goods_status']:explode(',',$row['goods_status']))): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Is_delete'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            
            <div class="radio">
            <?php if(is_array($isDeleteList) || $isDeleteList instanceof \think\Collection || $isDeleteList instanceof \think\Paginator): if( count($isDeleteList)==0 ) : echo "" ;else: foreach($isDeleteList as $key=>$vo): ?>
            <label for="row[is_delete]-<?php echo $key; ?>"><input id="row[is_delete]-<?php echo $key; ?>" name="row[is_delete]" type="radio" value="<?php echo $key; ?>" <?php if(in_array(($key), is_array($row['is_delete'])?$row['is_delete']:explode(',',$row['is_delete']))): ?>checked<?php endif; ?> /> <?php echo $vo; ?></label> 
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Toubao_content'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <textarea id="c-toubao_content" class="form-control editor" rows="5" name="row[toubao_content]" cols="50"><?php echo htmlentities($row['toubao_content']); ?></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Lipei_content'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <textarea id="c-lipei_content" class="form-control editor" rows="5" name="row[lipei_content]" cols="50"><?php echo htmlentities($row['lipei_content']); ?></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Isindex'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            
            <div class="radio">
            <?php if(is_array($isindexList) || $isindexList instanceof \think\Collection || $isindexList instanceof \think\Paginator): if( count($isindexList)==0 ) : echo "" ;else: foreach($isindexList as $key=>$vo): ?>
            <label for="row[isIndex]-<?php echo $key; ?>"><input id="row[isIndex]-<?php echo $key; ?>" name="row[isIndex]" type="radio" value="<?php echo $key; ?>" <?php if(in_array(($key), is_array($row['isIndex'])?$row['isIndex']:explode(',',$row['isIndex']))): ?>checked<?php endif; ?> /> <?php echo $vo; ?></label> 
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Clicks'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-clicks" class="form-control" name="row[clicks]" type="number" value="<?php echo htmlentities($row['clicks']); ?>">
        </div>
    </div>
    <div class="form-group layer-footer">
        <label class="control-label col-xs-12 col-sm-2"></label>
        <div class="col-xs-12 col-sm-8">
            <button type="submit" class="btn btn-success btn-embossed disabled"><?php echo __('OK'); ?></button>
            <button type="reset" class="btn btn-default btn-embossed"><?php echo __('Reset'); ?></button>
        </div>
    </div>
</form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="/shumei/public/assets/js/require<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js" data-main="/shumei/public/assets/js/require-backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js?v=<?php echo htmlentities($site['version']); ?>"></script>
    </body>
</html>