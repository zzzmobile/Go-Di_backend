<?php 
$products = $GLOBALS['products'];
$addons = $GLOBALS['addons'];
?>
<div class="col-xs-12 col-md-12 col-center align-center" style="height: 596px; overflow: hidden;">

	<!-- Begin sidebar -->
	<div id="dg-sidebar" style="background: #fff; padding: 10px;      width: 250px;   height: 596px; top: 0px;">
		<div class="dg-tools">
			<h3>Save Your Design</h3>
			<hr/>
			<p style="color: #000000;
    display: block;
    font-family: Garamond;
    font-size: 20px;
    line-height: 20px;
    outline: medium none;
    padding: 8px 10px;
    text-decoration: none;
    text-shadow: 1px 1px 1px #CCCCCC;">Select Category</p>

			<select name="category" id="category" class="form-control">
<?php
$con = new mysqli("localhost", "go_di", "godi@123", "go_di");
			//$con = new mysqli("localhost", "root", "", "biz_cards");
$query = "SELECT * FROM template_categories ";
$template_categories = mysqli_query($con, $query);
while($template_categories_data = mysqli_fetch_assoc($template_categories)) {  
?>
		<option value="<?php echo $template_categories_data['tempcat_id']?>" <?php if(isset($_GET['cat_id'])){ if($_GET['cat_id'] == $template_categories_data['tempcat_id']){?> selected="selected" <?php }}?>><?php echo $template_categories_data['tempcat_name']; ?></option>
<?php }?>
			</select>
<br/>
<p style="color: #000000;
    display: block;
    font-family: Garamond;
    font-size: 20px;
    line-height: 20px;
    outline: medium none;
    padding: 8px 10px;
    text-decoration: none;
    text-shadow: 1px 1px 1px #CCCCCC;">Card Name</p>

<input type="hidden" name="deign_edit_id" id="deign_edit_id"  class="form-control" required=""  <?php if(isset($_GET['id'])){?> value="<?php echo $_GET['id']; ?>" <?php }else{?>  value=""  <?php }?>  >



			<input type="text" name="design_name" id="design_name"  class="form-control" required="" <?php if(isset($_GET['name'])){?> value="<?php echo $_GET['name']; ?>"  <?php }else{?>  value="Design 1" <?php }?> >

<br/>
<p style="color: #000000;
    display: block;
    font-family: Garamond;
    font-size: 20px;
    line-height: 20px;
    outline: medium none;
    padding: 8px 10px;
    text-decoration: none;
    text-shadow: 1px 1px 1px #CCCCCC;">Card Type</p>


   <input type="radio" name="card_type" checked="checked" <?php if(isset($_GET['card_type'])){ if($_GET['card_type'] == '1'){?> checked="checked" <?php }}?> id="card_type1"  value="1"  onchange="show1()">  Free cards
   <input type="radio" name="card_type" <?php if(isset($_GET['card_type'])){ if($_GET['card_type'] == '2'){?> checked="checked" <?php }}?>  id="card_type2"  value="2"  onchange="show2()">  Pro cards
   <br/>
   <input type="radio" name="card_type" <?php if(isset($_GET['card_type'])){ if($_GET['card_type'] == '3'){?> checked="checked" <?php }}?>  id="card_type3"  value="3"  onchange="show2()">  VIP  cards



<br/>
 <script type="text/javascript">
            function show1(){
                document.getElementById('pro_hi').style.display = 'none';
            }
            function show2(){
                document.getElementById('pro_hi').style.display = 'block';
            }
        </script>
<br/>
<p id="pro_hi" style="color: #000000;
    display: block;
    font-family: Garamond;
    font-size: 20px;
    line-height: 20px;
    outline: medium none;
    padding: 8px 10px;
    text-decoration: none;
    text-shadow: 1px 1px 1px #CCCCCC; 
    <?php if(isset($_GET['card_type'])){ if($_GET['card_type'] == '1'){?>   display: none; <?php }}else{?>  display: none;  <?php }?>

    ">Card Price($)

<br/><br/>
<select  name="price" id="price"  class="form-control">
	<option value="">Select Price</option>
	<option value="0.99"<?php if(isset($_GET['price'])){ if($_GET['price'] == '0.99'){?> selected="selected" <?php }}?>>0.99</option>
	<option value="1.99"<?php if(isset($_GET['price'])){ if($_GET['price'] == '1.99'){?> selected="selected" <?php }}?>>1.99</option>
	<option value="2.99"<?php if(isset($_GET['price'])){ if($_GET['price'] == '2.99'){?> selected="selected" <?php }}?>>2.99</option>
	<option value="3.99"<?php if(isset($_GET['price'])){ if($_GET['price'] == '3.99'){?> selected="selected" <?php }}?>>3.99</option>
	<option value="4.99"<?php if(isset($_GET['price'])){ if($_GET['price'] == '4.99'){?> selected="selected" <?php }}?>>4.99</option>
	<option value="5.99"<?php if(isset($_GET['price'])){ if($_GET['price'] == '5.99'){?> selected="selected" <?php }}?>>5.99</option>
	<option value="6.99"<?php if(isset($_GET['price'])){ if($_GET['price'] == '6.99'){?> selected="selected" <?php }}?>>6.99</option>
	<option value="7.99"<?php if(isset($_GET['price'])){ if($_GET['price'] == '7.99'){?> selected="selected" <?php }}?>>7.99</option>
	<option value="8.99"<?php if(isset($_GET['price'])){ if($_GET['price'] == '8.99'){?> selected="selected" <?php }}?>>8.99</option>
	<option value="9.99"<?php if(isset($_GET['price'])){ if($_GET['price'] == '9.99'){?> selected="selected" <?php }}?>>9.99</option>
</select>
</p>


<!-- <input type="text" name="price" id="price"  class="form-control" required="" <?php if(isset($_GET['price'])){?> value="<?php echo $_GET['price']; ?>"  <?php }else{?>  value="50" <?php }?> > -->

			<br/>
			<button type="button" class="btn btn-primary" onclick="design.save()" style=" font-size: 18px;">
				<!-- <i class="fa fa-save"></i> -->
				<?php echo lang('designer_save_btn'); ?> Card
			</button>
			<!-- <a href="javascript:void(0)" data-type="preview" class="dg-tool btn btn-default btn-sm">
				<i class="fa fa-eye"></i>
				<small><?php echo lang('designer_top_preview'); ?></small>
			</a>
			<a href="javascript:void(0)" data-type="zoom" title="<?php echo lang('designer_top_zoom'); ?>" class="dg-tool btn btn-default btn-sm">
				<i class="fa fa-search"></i>
				<small><?php echo lang('designer_top_zoom'); ?></small>
			</a>
			<button type="button" class="btn btn-default btn-sm" onclick="design.save()">
				<i class="fa fa-share-alt"></i>
				<small><?php echo lang('designer_share'); ?></small>
			</button> -->
			<?php //$addons->view('helper'); ?>
		</div>
	</div>
	<!-- END sidebar -->
		<h1 style="font-size: 50px; color: #2A3F54">Card Editor
			</h1>
<!-- <center><div style="width: 90px;">
	<p style="font-size: 14px; float: left;"><b>Front </b></p> 
	<p  style="font-size: 14px; float: right;"><b>Back </b></p></div></center> -->
	<!-- design area -->
	<div id="design-area" class="div-design-area" >
		<div id="app-wrap" class="div-design-area">

		<?php if ($products === false) { ?>
			<div id="view-front" class="labView active">
				<div class="product-design">
					<strong><?php echo lang('designer_product_data_found'); ?></strong>
				</div>
			</div>
		<?php } else { ?>
		
			<!-- begin front design -->					
			<div id="view-front" class="labView active">
				
				<div class="product-design"></div>
				<div class="design-area" style="border: 0px;"><div class="content-inner" id="full" <?php if(isset($_GET['color'])){?> style="background-color: #<?php echo $_GET['color']; ?>" <?php }?>></div></div>
			</div>						
			<!-- end front design -->
			 
			<!-- begin back design -->
			<div id="view-back" class="labView">
				<div class="product-design"></div>
				<div class="design-area"    style="border: 0px;"><div class="content-inner" id="full1" <?php if(isset($_GET['back_background_color'])){?> style="background-color: #<?php echo $_GET['back_background_color']; ?>" <?php }?>></div></div>
			</div>
			<!-- end back design -->
			
			<!-- begin left design -->
			<div id="view-left" class="labView">
				<div class="product-design"></div>
				<div class="design-area"><div class="content-inner"></div></div>
			</div>
			<!-- end left design -->
			
			<!-- begin right design -->
			<div id="view-right" class="labView">
				<div class="product-design"></div>
				<div class="design-area"><div class="content-inner"></div></div>
			</div>
			<!-- end right design -->
			
		<?php } ?>
			
			<!-- BEGIN help functions -->
			<div id="dg-help-functions" style="display: none;">
				<div class="btn-group-vertical" role="group" aria-label="Group functions">
					<span class="btn btn-default" data-placement="left" data-toggle="tooltip" data-original-title="<?php echo lang('designer_clipart_edit_flip'); ?>" onclick="design.tools.flip('x')">
						<i class="glyphicons transfer glyphicons-12"></i>
					</span>					
					<span class="btn btn-default" data-placement="left" data-toggle="tooltip" data-original-title="<?php echo lang('designer_align_horizontal'); ?>" onclick="design.tools.move('vertical')">
						<i class="glyphicon glyphicon-object-align-vertical"></i>
					</span>
					<span class="btn btn-default" data-placement="left" data-toggle="tooltip" data-original-title="<?php echo lang('designer_align_vertical'); ?>" onclick="design.tools.move('horizontal')">
						<i class="glyphicon glyphicon-object-align-horizontal"></i>
					</span>	
					<span class="btn btn-default" data-placement="left" data-toggle="tooltip" data-original-title="<?php echo lang('designer_align_left'); ?>" onclick="design.tools.move('left')">
						<i class="fa fa-chevron-left"></i>
					</span>	
					<span class="btn btn-default" data-placement="left" data-toggle="tooltip" data-original-title="<?php echo lang('designer_align_right'); ?>" onclick="design.tools.move('right')">
						<i class="fa fa-chevron-right"></i>
					</span>	
					<span class="btn btn-default" data-placement="left" data-toggle="tooltip" data-original-title="<?php echo lang('designer_align_up'); ?>" onclick="design.tools.move('up')">
						<i class="fa fa-chevron-up"></i>
					</span>	
					<span class="btn btn-default" data-placement="left" data-toggle="tooltip" data-original-title="<?php echo lang('designer_align_down'); ?>" onclick="design.tools.move('down')">
						<i class="fa fa-chevron-down"></i>
					</span>
					<span class="btn btn-default" data-placement="left" data-toggle="tooltip" data-original-title="<?php echo lang('designer_team_remove'); ?>" onclick="design.tools.remove()">
						<i class="fa fa-trash-o"></i>
					</span>
					<span class="btn btn-default" data-placement="left" data-toggle="tooltip" data-original-title="<?php echo lang('designer_top_reset'); ?>" onclick="design.tools.reset(this)">
						<i class="fa fa-refresh"></i>
					</span>
					<?php $addons->view('tools'); ?>
				</div>
			</div>
			<!-- END help functions -->
		</div>
	</div>

	 <div class="" id="product-thumbs"  style=" top: -480px;    z-index: 3333333333333333333;
    position: relative;" ></div>
</div>