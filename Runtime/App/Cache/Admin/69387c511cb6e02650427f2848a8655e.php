<?php if (!defined('THINK_PATH')) exit();?>    <form action="/thinkblog/index.php/Admin/Nav/insert" id="j_custom_form"  class=" form-validate col-md-12 form-label-right center-margin" method="post" noEnter>
    
       <div class="pageContainer">
            <div class="form-row">
                 <div class="form-label col-md-3">
                <label for="j_type">类型：</label>
                 </div>
                <div class="form-input col-md-6">
               <select name="type"  data-container="body"  id="j_type" class="selectpicker show-tick" data-style="btn medium bg-green" data-width="auto">
                                <option value="0">分类</option>
                                <option value="1">分组</option>
                                 <option value="2">控制器</option>
                                <option value="3">自定义</option>
                 </select>
                 </div>
            </div>
           
            
           
            <div class="form-row" id="fenlei">
                <div class="form-label col-md-3">
                <label for="j_cid">分类：</label>
                 </div>
                <div class="col-md-6">
                <select name="cid" id="j_cid" data-container="body"  class="selectpicker show-tick" data-style="btn medium bg-green" data-width="auto">
                               
                               <?php if(is_array($catelist)): $i = 0; $__LIST__ = $catelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$fenlei): $mod = ($i % 2 );++$i;?><option value="<?php echo ($fenlei["id"]); ?>"><?php echo ($fenlei["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                 </select>
                 </div>
            </div>
            <div class="form-row hidden" id="fenzu">
             <div class="form-label col-md-3">
                <label for="j_gid">分组：</label>
                </div>
                <div class="col-md-6">
                <select name="gid"  id="j_gid" data-container="body"  class="selectpicker show-tick" data-style="btn medium bg-green" data-width="auto">
                               <?php if(is_array($group)): $i = 0; $__LIST__ = $group;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$fenzu): $mod = ($i % 2 );++$i;?><option value="<?php echo ($key); ?>"><?php echo ($fenzu); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                 </select>
            </div></div>
             <div class="form-row hidden" id="navname">
              <div class="form-label col-md-3">
                <label for="j_name">名称：</label>
                </div>
                <div class="form-input col-md-6">
                <input type="text" class="validate[required] required" size="20" name="name" id="j_name" value=""  >
            </div></div>
            
          
            <div class="form-row kongzhiqi hidden">
             <div class="form-label col-md-3">
                <label for="j_controll">控制器：</label>
                </div>
                <div class="form-input col-md-6">
                <input type="text" class="validate[required,custom[onlyLetterSp]] required" size="10" name="controll" id="j_controll" value="" >
             </div></div>
            <div class="form-row kongzhiqi hidden">
             <div class="form-label col-md-3">
                <label for="j_action">操作名：</label>
                </div>
                <div class="form-input col-md-6">
                <input type="text" class="validate[required,custom[onlyLetterSp]] required" size="10" name="action" id="j_action" value="" >
            </div></div>
             <div class="form-row hidden" id="zidingyi">
              <div class="form-label col-md-3">
                <label for="j_url">链接：</label>
                </div>
                <div class="form-input col-md-6">
                <input type="text" class="validate[required] required" size="30" name="url" id="j_url" value="" >
            </div></div>
            <script>
            
            $(function(){
            	
            	$('#j_type').change(function(){
            		
            		var $type = $(this).find("option:selected").attr("value");
            		
            		if($type==0){
 	                   $('#zidingyi').addClass('hidden');
	                   $('.kongzhiqi').addClass('hidden');
	                   $('#fenzu').addClass('hidden');
	                   $('#fenlei').removeClass('hidden');
	                   $('#navname').addClass('hidden');
	                 
            		}
                    if($type==1){
                    	
                    	
 	                   $('#zidingyi').addClass('hidden');
	                   $('.kongzhiqi').addClass('hidden');
	                   $('#fenzu').removeClass('hidden');
	                   $('#navname').addClass('hidden');   
	                   $('#fenlei').addClass('hidden');   
	                   
            		}
                    if($type==2){
                    	
 	                   $('#zidingyi').addClass('hidden');
	                   $('.kongzhiqi').removeClass('hidden');
	                   $('#navname').removeClass('hidden');
	                   $('#fenzu').addClass('hidden');
	                   $('#fenlei').addClass('hidden');	
	                  
                    }
                    if($type==3){
                    	
	                   $('#zidingyi').removeClass('hidden');
	                   $('#navname').removeClass('hidden');
	                   $('.kongzhiqi').addClass('hidden');
	                   $('#fenzu').addClass('hidden');
	                   $('#fenlei').addClass('hidden');
	                  
                    }
            	});
            	
            	
            });
            
            
            
            </script>
              <div class="form-row">
               <div class="form-label col-md-3">
                <label for="j_sort">排序：</label>
                </div>
                <div class="form-input col-md-6">
                <input type="text" class="validate[required,custom[integer]] required" size="5" name="sort" id="j_sort" value="" >
            </div></div>
                        <div class="form-row">
                         <div class="form-label col-md-3">
                <label for="j_win">新窗口：</label>
                </div>
                <div class="col-md-6">
               <select name="win"  data-container="body"  id="j_win" class="selectpicker show-tick validate[required]" data-style="btn medium bg-green" data-width="auto">
                               
                                 <option value="1">是</option>
                                <option value="0">否</option>
                 </select>
            </div></div>
            <div class="form-row">
             <div class="form-label col-md-3">
                <label for="j_status">状态：</label>
                </div>
                <div class="col-md-6">
               
               <select name="status"  data-container="body"  id="j_status" class="selectpicker show-tick validate[required]" data-style="btn medium bg-green" data-width="auto">
                               
                                 <option value="1">启用</option>
                                <option value="0">禁用</option>
                 </select>
            </div></div>
             
		
		  <div class="actionBar">
               
                <div class="form-input col-md-10 col-md-offset-3">
                    <button type="button" class="btn medium bg-blue xubox_yes"> <span class="button-content">保存</span></button>
            <button type="button" class="btn medium bg-red mrg15L xubox_close"><span class="button-content">取消</span></button>

                </div>
            </div>
            </div>
    </form>