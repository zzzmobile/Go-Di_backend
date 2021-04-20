<?php
$settings = $GLOBALS['settings'];
$addons = $GLOBALS['addons'];
?>
<div class="col-left" style="background: #fff; padding: 10px;     width: 260px;   height: 596px;">
	<!-- <div class="text-center product-btn-info">		
		<a href="#none" <?php echo cssShow($settings, 'show_product_info'); ?> data-target="#modal-product-info" data-toggle="modal" class="btn btn-default pull-left btn-sm"><i class="fa fa-info"></i> <span><?php echo lang('design_product_info'); ?></span></a>
		<a href="#none" <?php echo cssShow($settings, 'show_product_size'); ?> data-target="#modal-product-size" data-toggle="modal" class="btn btn-default pull-right btn-sm"><i class="fa fa-male"></i> <span><?php echo lang('design_size_chart'); ?></span></a>
	</div> -->
	
	<div id="dg-left" class="width-100" style="padding: 0px;">
		<div class="dg-box width-100">
			<ul class="menu-left">
				<!-- <li <?php echo cssShow($settings, 'show_product'); ?>>
					<a href="javascript:void(0)" class="view_change_products" title="" data-toggle="modal" data-target="#dg-products">
						<i class="glyphicons t-shirt"></i> <?php echo lang('designer_menu_choose_product'); ?>
					</a>
				</li>	 -->		
				<li <?php echo cssShow($settings, 'show_add_text'); ?>>
					<a href="javascript:void(0)" class="add_item_text" title="">
						<i class="glyphicons text_bigger"></i> <?php echo lang('designer_menu_add_text'); ?>
					</a>
				</li>
				<!-- 
				<li <?php echo cssShow($settings, 'show_add_art'); ?>>
					<a href="javascript:void(0)" class="add_item_clipart" title="" data-toggle="modal" data-target="#dg-cliparts">
						<i class="glyphicons picture"></i> <?php echo lang('designer_menu_add_art'); ?>
					</a>
				</li>	 -->						
				<li <?php echo cssShow($settings, 'show_add_upload'); ?>>
					<a href="javascript:void(0)" title="" data-toggle="modal" data-target="#dg-myclipart">
						<i class="glyphicons cloud-upload"></i> <?php echo lang('designer_menu_upload_image'); ?>
					</a>
				</li>
				<li <?php echo cssShow($settings, 'show_add_upload'); ?>>
					<a href="javascript:void(0)" title="" data-toggle="modal" data-target="#dg-myclipart">
						<i class="glyphicons cloud-upload"></i> Background Image
					</a>
				</li>

<li >
				<a href="javascript:void(0)" title="" >Front Background Color</a> 
        
   <center>

   	<input type="text" id="inlinecolors" class="form-control" data-inline="true" <?php if(isset($_GET['color'])){?> value="#<?php echo $_GET['color']; ?>" <?php }else{?> value="" <?php }?>>
</center>
</li>
<li >
<a href="javascript:void(0)" title="" >Back Background Color</a> 

    <center>	<input type="text" id="inlinecolors1" class="form-control" data-inline="true" <?php if(isset($_GET['back_background_color'])){?> value="#<?php echo $_GET['back_background_color']; ?>" <?php }else{?> value="" <?php }?>>

				</center></li>
				<!-- <li <?php echo cssShow($settings, 'show_add_team'); ?>>
					<a href="javascript:void(0)" class="add_item_team" title="">
						<i class="glyphicons soccer_ball"></i> <?php echo lang('designer_menu_name_number'); ?>
					</a>
				</li>
				<li>
					<a href="javascript:void(0)" class="add_item_mydesign">
						<i class="glyphicons user"></i> <?php echo lang('designer_menu_my_design'); ?>
					</a>
				</li>	 -->			
				<!-- <li <?php echo cssShow($settings, 'show_add_qrcode'); ?>>
					<a href="javascript:void(0)" class="add_item_qrcode" title="">
						<i class="glyphicons qrcode"></i> <?php echo lang('designer_menu_add_qrcode'); ?>
					</a>
				</li> -->
				<?php $addons->view('menu-left'); ?>
			</ul>
		</div>
		
		<div class="dg-box width-100 div-layers no-active">
			<div class="layers-toolbar">
				<button type="button" class="btn btn-default">
					<i class="fa fa-long-arrow-down"></i>
					<i class="fa fa-long-arrow-up"></i>
				</button>
				<button type="button" class="btn btn-default btn-sm">
					<i class="fa fa-angle-right"></i>						
				</button>
			</div>


   <script type="text/javascript">



$(function(){
 
  
  var $inlinehex = $('#inlinecolorhex h3 small');
  
  $('#inlinecolors').minicolors({
    inline: true,
    theme: 'bootstrap',
    change: function(hex) {
      if(!hex) return;
	  console.log('>>>>>>',hex);
	  document.getElementById('full').style.background = hex;
	   //$("#inlinecolorhex").css("background-color",$(hex).val());
     // $inlinehex.html(hex);
    }
  });

$('#inlinecolors1').minicolors({
    inline: true,
    theme: 'bootstrap',
    change: function(hex) {
      if(!hex) return;
	  console.log('>>>>>>',hex);
	  document.getElementById('full1').style.background = hex;
	   //$("#inlinecolorhex").css("background-color",$(hex).val());
     // $inlinehex.html(hex);
    }
  });

});
</script>


			<div class="accordion">
				<h3><?php echo lang('designer_menu_login_layers'); ?></h3>
				<div id="dg-layers">
					<ul id="layers">									
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>