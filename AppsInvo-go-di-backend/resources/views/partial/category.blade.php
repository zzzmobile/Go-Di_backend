<div class="form-group">
	{{ Form::label('sub_category_image[]', 'SubCategory Image', ['class' => 'form-control-label']) }}
	{{ Form::file('sub_category_image[]', '', ['id' => '', 'class' => 'form-control', 'placeholder' => 'SubCategory Image']) }}
</div>
<div class="form-group">
	{{ Form::label('sub_category_name[]', 'SubCategory Name', ['class' => 'form-control-label']) }}
	{{ Form::text('sub_category_name[]', '', ['id' => '', 'class' => 'form-control', 'placeholder' => 'SubCategory Name']) }}
</div>