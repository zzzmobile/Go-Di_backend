<?php 
$settings = $GLOBALS['settings'];
$addons = $GLOBALS['addons'];
?>
<div class="modal fade"  data-backdrop="static" data-keyboard="false" id="dg-share" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->						
				<h4><?php echo lang('designer_share_save_completed'); ?></h4>
			</div>
			<div class="modal-body">



<center>

<p style="color: #000000;
    display: block;
    font-family: Garamond;
    font-size: 20px;
    line-height: 20px;
    outline: medium none;
    padding: 8px 10px;
    text-decoration: none;
    text-shadow: 1px 1px 1px #CCCCCC;">Upload Design Image</p>

<form method="post"  enctype="multipart/form-data" action="">

<label>Front Image</label>
<input type="file" name="image" value=""  class="form-control" required="">
<br/>
<label>Back Image</label>
<input type="file" name="image1" value=""  class="form-control" required="">
<br/>
<input type="submit" name="image_upload" value="Submit"  class="btn btn-primary">

</center>
</form>

<hr/>

<!-- 
<center>
Or	
</center>
<hr/>


				<center><a  onclick="window.location = 'http://localhost/go-di/card_editor/tshirtecommerce/';" class="btn btn-primary">Make Another Design</a></center> -->
				<!-- <div class="form-group">
					<label for="exampleInputEmail1"><?php echo lang('designer_share_your_design_link'); ?>:</label>
					<input type="text" class="form-control" id="link-design-saved" value="" readonly>
				</div> -->
				
				<!-- <div class="form-group row">
					<label class="col-xs-1 col-sm-1 col-md-1" style="line-height: 24px;"><?php echo lang('designer_share'); ?>: </label>					
					<div class="col-xs-1 col-sm-1 col-md-1">
						<a href="javascript:void(0)" onclick="design.share.facebook()" class="icon-25 share-facebook" title="Facebook"></a> 
					</div>
					<div class="col-xs-1 col-sm-1 col-md-1">
						<a href="javascript:void(0)" onclick="design.share.twitter()" class="icon-25 share-twitter" title="Twitter"></a>
					</div>
					<div class="col-xs-1 col-sm-1 col-md-1">
						<a href="javascript:void(0)" onclick="design.share.pinterest()" class="icon-25 share-pinterest" title="Pinterest"></a> 
					</div>
					<?php $addons->view('share'); ?>
				</div> -->

				
			</div>
		</div>
	</div>
</div>