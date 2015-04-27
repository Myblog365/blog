<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
    <html>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Myblog365-后台管理</title>
        <meta name="description" content="kevin-Myblog365交流博客">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">


        <!-- CSS Core -->
<link rel="shortcut icon" href="/thinkblog/Public/static/images/favicon.jpg">
        <link rel="stylesheet" type="text/css" href="/thinkblog/Public/admin/css/app.css">
        <link id="layout-theme" rel="stylesheet" type="text/css" href="/thinkblog/Public/admin/css/default.min.css">
        <!-- JS -->
      <script type="text/javascript" src="/thinkblog/Public/static/jquery-1.10.2.min.js"></script>

</head>
<body class="fixed-sidebar fixed-header">



<div id="page-wrapper" class="demo-example">

<div id="page-sidebar">
<div id="header-logo">
                   

                    <a href="javascript:;" class="tooltip-button" data-placement="bottom" title="Close sidebar" id="close-sidebar">
                        <i class="glyph-icon icon-align-justify"></i>
                    </a>
                    <a href="javascript:;" class="tooltip-button hidden" data-placement="bottom" title="Open sidebar" id="rm-close-sidebar">
                        <i class="glyph-icon icon-align-justify"></i>
                    </a>
                    <a href="javascript:;" class="tooltip-button hidden" title="Navigation Menu" id="responsive-open-menu">
                        <i class="glyph-icon icon-align-justify"></i>
                    </a>
</div>

                <div id="sidebar-menu" class="scrollable-content">
                    <ul>
                        <li>
                            <a href="<?php echo U('Admin/Index/index');?>"  title="Dashboard">
                                <i class="glyph-icon icon-dashboard"></i>
                                后台首页
                            </a>
                        </li>
                                 <?php if(is_array($groups)): $i = 0; $__LIST__ = $groups;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="sub-menu">
                      <a href="javascript:;" >
                      <i class="glyph-icon <?php echo ($vo['icon']); ?>"></i>
                          
                          <span> <?php echo ($vo["title"]); ?></span>
                      </a>
                     
                      <ul class="sub">
                       <?php if(is_array($menu[$vo['id']])): $i = 0; $__LIST__ = $menu[$vo['id']];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vosub): $mod = ($i % 2 );++$i;?><li>
                          <?php if($vosub['hassub'] == 1): ?><a href="javascript:void(0);"  zs-id="<?php echo ($vosub['id']); ?>" ><i class="glyph-icon <?php echo ($vosub['icon']); ?>"></i><?php echo ($vosub["title"]); ?></a>                        
                          
                           <ul class="sub mrg10A">
                           <?php if(is_array($vosub['sub'])): $i = 0; $__LIST__ = $vosub['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vosubsub): $mod = ($i % 2 );++$i;?><li><a  href="<?php echo ($vosubsub['url']); ?>" rel="<?php echo ($vosubsub['rel']); ?>"  zs-id="<?php echo ($vosubsub['id']); ?>"><i class="glyph-icon icon-chevron-right"></i><?php echo ($vosubsub["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>    
                            </ul>
                          <?php else: ?>
                          <a href="<?php echo ($vosub['url']); ?>" rel="<?php echo ($vosub['rel']); ?>"  zs-id="<?php echo ($vosub['id']); ?>"><i class="glyph-icon  <?php echo ($vosub['icon']); ?>"></i><?php echo ($vosub["title"]); ?></a><?php endif; ?>

                         
                          
                          
                          </li><?php endforeach; endif; else: echo "" ;endif; ?>
                         
                      </ul>
                     
                  </li><?php endforeach; endif; else: echo "" ;endif; ?>
                       
                       
                    </ul>
                    
        
                </div>

            </div><!-- #page-sidebar -->

<div id="page-main">
<div id="page-main-wrapper">

                   <div id="page-header" class="clearfix">
                        <div id="page-header-wrapper" class="clearfix">
                            
                            
                            
                            
                            <div class="top-icon-bar dropdown">
                                <a href="javascript:;" title="" class="user-ico clearfix" data-toggle="dropdown">
                                    <img width="36" src="<?php echo ($userinfo['avatar64']); ?>" alt="<?php echo ($userinfo["nickname"]); ?>">
                                    <span><?php echo ($userinfo["nickname"]); ?></span>
                                    <i class="glyph-icon icon-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu float-right">
                                    
                                    <li>
                                        <a href="<?php echo U('Public/password');?>"  width="460px" height="280px" target=dialog title="修改密码">
                                            <i class="glyph-icon icon-cog mrg5R"></i>
                                            修改密码
                                        </a>
                                    </li>
                                    <li>
                                        <a class="font-orange" href="<?php echo U('Home/Index/index');?>" title="">
                                            <i class="glyph-icon icon-flag mrg5R"></i>
                                            返回前台
                                        </a>
                                    </li>
                                   
                                    <li class="divider"></li>
                                     <li>
                                        <a href="<?php echo U('Public/logout');?>" target="AjaxTodo" title="你确定要退出后台管理吗？">
                                        
                                            <i class="glyph-icon icon-sign-out font-size-13 mrg5R"></i>
                                            <span class="font-bold">退出</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                            <div class="top-icon-bar">
                               <a href="<?php echo U('Public/cleancache');?>" target="AjaxTodo" >
                                   
                                     <i class="glyph-icon icon-wrench"></i>
                                     清理缓存
                                   
                                </a>
                                
                            </div>
                            

                            

                        </div>
                    </div><!-- #page-header -->

<div id="page-breadcrumb-wrapper">


<div id="page-breadcrumb">
                            <a href="<?php echo ($breadcrumb['purl']); ?>" id="parentname" title="<?php echo ($breadcrumb['pname']); ?>">
                                <i class="glyph-icon icon-dashboard"></i>
                                <?php echo ($breadcrumb['pname']); ?>
                            </a>
                           
                            <span class="current" id="activeaname">
                                <?php echo ($breadcrumb['localname']); ?>
                            </span>
                        </div>
                        
                     


    </div><!-- #page-breadcrumb-wrapper -->

<div id="page-content">


<form  action="<?php echo U('index');?>" method="post" id="formsearch">
<div class="example-code">
  <div class="form-label float-left" >
                   <label>名称：</label>
                </div>
                <div class="form-input col-md-1">
                    <input  type="text" name="name" value="<?php echo ($_REQUEST['name']); ?>">
                </div>
  <div class="form-label float-left" >
                   <label>分组：</label>
                </div>
    
                <select name="groupid" id="j-group" class="selectpicker show-tick"  data-width="auto" data-style="btn medium bg-green" data-container="body">
                        <option  value="<?php echo $_REQUEST['groupid'];?>"><?php echo (get_config_group($_REQUEST['groupid'])); ?></option>
                        <?php if($_REQUEST['groupid'] != ''): ?><option  value="">全部</option><?php endif; ?>
                        <?php if($_REQUEST['groupid'] != 0): ?><option  value="0">不分组</option><?php endif; ?>
                        
                        <?php if(is_array($group)): $i = 0; $__LIST__ = $group;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($_REQUEST['group'] != $key): ?><option  value="<?php echo ($key); ?>"><?php echo ($vo); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                        
                      
                    </select>
  <button type="submit" class="btn medium bg-orange"> <span class="button-content">
                <i class="glyph-icon icon-search"></i>
               查询
            </span></button>
                <a class="btn medium bg-blue" href="javascript:clearQuery(this)">
                <span class="button-content"><i class="glyph-icon icon-undo"></i> 清空查询
                </span>
                </a>
                <a href="<?php echo U('add');?>" rel="configadd" title="新增配置项" class="btn medium bg-green">
                <span class="button-content">
                <i class="glyph-icon icon-plus"></i> 新增
                </span>
                </a>
                <a href="<?php echo U('sort?group='.$_REQUEST['group']);?>" rel="configsort"  title="排序配置项" class="btn medium bg-green list_sort">
                <span class="button-content">
                <i class="glyph-icon icon-sort-amount-desc"></i> 排序
                </span>
                </a>
               
                            <div class="dropdown float-right mrg15R">
                                <a href="javascript:;" class="btn medium bg-blue" title="Example dropdown" data-toggle="dropdown">
                                    <span class="button-content">
                                        <i class="glyph-icon icon-cog float-left"></i>
                                        
                                        批量操作
                                        
                                        <i class="glyph-icon icon-caret-down float-right"></i>
                                    </span>
                                </a>
                               
                                <ul class="dropdown-menu float-right">
                                    
                                     <li class="hidden">
                                        <a href="/thinkblog/index.php/Admin/Config/outxls/ids/all" target="dwzExport">
                                            <i class="glyph-icon icon-sign-out font-size-13 mrg5R"></i>
                                            <span class="font-bold">导出全部</span>
                                        </a>
                                    </li>
                                     <li class="hidden">
                                        <a href="/thinkblog/index.php/Admin/Config/outxls" target="checkedExport" idname="ids">
                                            <i class="glyph-icon icon-sign-out font-size-13 mrg5R"></i>
                                            <span class="font-bold">导出选中</span>
                                        </a>
                                    </li>
                                   
                                   
                                    <li class="divider hidden"></li>
                                    <li>
                                        <a class="font-orange" href="<?php echo U('selectedDelete');?>"  title="确定要删除选中信息吗？" target="checkedAjaxTodo" idname="ids">
                                            <i class="glyph-icon icon-trash-o"></i>
                                            删除选中
                                        </a>
                                    </li>
                                </ul>
                            
                            </div>
                     
    </div>
    <div class="divider"></div>
    </form>
    <table class="table text-left"  id="zstable" data-sort="">
      
        <thead>
            <tr>
                <th class="nosort nosearch" width="30"></th>
               <th class="nosearch">ID</th>
					<th>名称</th>
					<th>标题</th>
					<th>分组</th>
					<th>类型</th>
					

                <th class="nosort nosearch" width="28"><input type="checkbox" class="j-icheck checkboxCtrl" group="ids"></th>
                <th class="nosort nosearch text-center" width="150">操作</th>
            </tr>
        </thead>
        <tbody>

           <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$config): $mod = ($i % 2 );++$i;?><tr>
            <td></td>
                <td><?php echo ($config["id"]); ?></td>
						<td><a href="<?php echo U('edit?id='.$config['id']);?>"><?php echo ($config["name"]); ?></a></td>
						<td><?php echo ($config["title"]); ?></td>
						<td><?php echo (get_config_group($config["groupid"])); ?></td>
						<td><?php echo (get_config_type($config["type"])); ?></td>
               
                <td><input type="checkbox" name="ids" class="j-icheck" value="<?php echo ($config["id"]); ?>"></td>
                <td>
                <div class="mrg0A">
        <a href="<?php echo U('edit',array('id'=>$config['id']));?>" class="btn small bg-blue" title="编辑配置项">
            <span class="button-content"><i class="glyph-icon icon-edit"></i> 编辑</span>
        </a>
        <a href="<?php echo U('foreverdelete',array('id'=>$config['id']));?>" class="btn small bg-red"  target="ajaxTodo" title="确定要删除该行信息吗？">
            <span class="button-content"><i class="glyph-icon icon-trash-o"></i> 删除</span>
        </a>
                </div>
                </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
    
</div>










                

	</div><!-- #page-content -->
                


</div><!-- #page-main -->
</div><!-- #page-main-wrapper -->
</div><!-- #page-wrapper -->







  
        <!--[if lt IE 9]>
          <script src="/thinkblog/Public/static/html5.js"></script>
          <script src="/thinkblog/Public/static/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="/thinkblog/Public/static/uploadify/jquery.uploadify.min.js"></script>
        <link rel="stylesheet" type="text/css" href="/thinkblog/Public/static/uploadify/uploadify.css"> 
        <script type="text/javascript" src="/thinkblog/Public/static/layer/layeradmin.js"></script>
         <script type="text/javascript" src="/thinkblog/Public/static/kindeditor/kindeditor-all.js"></script>
         <script type="text/javascript" src="/thinkblog/Public/admin/js/app.js"></script>
         <script type="text/javascript" src="/thinkblog/Public/admin/js/core.js"></script>
    

<script type="text/javascript">

var _STATIC_ = "/thinkblog/Public/static";
var _APP_="/thinkblog/index.php";
var _PUBLIC_="/thinkblog/Public";
$(function(){
	initUI();
});

var editor = KindEditor.create('textarea.editor');

KindEditor.ready(function(K) {

    editor = K.create('textarea[name="description"]');
    K('#image').click(function() {
        editor.loadPlugin('image', function() {
            editor.plugin.imageDialog({
                imageUrl : K('#thumb').val(),
                clickFn : function(url, title, width, height, border, align) {
                    K('#thumb').val(url);
                    editor.hideDialog();
                }
            });
        });
    });
});

</script>
<script>

	
	setactive("<?php echo ($breadcrumb['id']); ?>");



</script>






</body>
</html>