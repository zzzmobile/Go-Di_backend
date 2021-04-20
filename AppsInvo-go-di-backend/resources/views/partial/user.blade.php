<div class="row">
	<div id="" class="col-md-5">
	  <div class="" style="">
	  	@if(is_null($user->image) || empty($user->image) || $user->image == 'null')
			{{ Html::image('images/user.png', 'Profile Image', ['id' => 'profileImg', 'class' => 'profile-img img-circle img-responsive', 'style' => 'width:150px;margin:20px auto;']) }}
		@else
			{{ Html::image($user->image, 'Profile Image', ['id' => 'profileImg', 'class' => 'profile-img img-circle img-responsive', 'style' => 'width:150px;margin:20px auto;']) }}
		@endif
		<table style="width: 100%;">
			<tr>
				<td style="padding-bottom: 10px;" class="text-center"><h4>{{ $user->name }}</h4></td>
			</tr>
			<tr>
				<td style="padding-bottom: 10px;" class="text-center">{{ $user->mobile }}</td>
			</tr>
			<tr>
				<td style="padding-bottom: 10px;" class="text-center">{{ $user->country }}</td>
			</tr>
			<tr>
				<td style="padding-bottom: 10px;" class="text-center">{{ $user->company_name }}</td>
			</tr>
			<tr>
				<td class="text-center" style="padding: 20px;">
					@if($user->status == '1')
						{!! html_entity_decode(link_to_route('admin-inactive-user', 'Deactivate', [$user->id], ['class' => 'btn btn-danger', 'onclick' => 'return checkInActive()', 'title' => 'Deactivate'])) !!}
					@else
						{!! html_entity_decode(link_to_route('admin-active-user', 'Activate', [$user->id], ['class' => 'btn btn-success', 'onclick' => 'return checkActive()', 'title' => 'Activate'])) !!}
					@endif

					{!! html_entity_decode(link_to_route('admin-del-user', 'Delete', [$user->id], ['class' => 'btn btn-danger', 'onclick' => 'return check()', 'title' => 'Delete'])) !!}
				</td>
			</tr>
		</table>
	  </div>
	</div>
	<div class="col-md-7">
		<h3 class="text-center">Total Advertisements Created : {{ $user->advertisements->count() }}</h3>
		<div style="overflow-y: auto;height: 410px;">
			@forelse($user->advertisements as $key => $advertisement)
				<div style="background-color: #f0f1f3;margin-right: 5px;">
					@if($advertisement->organic == '1')
						<h4 style="padding: 5px;color: #008000;">{{ $advertisement->title }}
						<img src="{{ asset('images/organic_ic.png') }}" style="display: inline;width: 16px;">
						<span class="pull-right" style="color: #000000;">
							{{ urldecode($advertisement->currency) }}
							&nbsp;
							{{ $advertisement->price }}
						</span>
						</h4>
					@else
						<h4 style="padding: 5px;color: #000000;">{{ $advertisement->title }}
						<span class="pull-right" style="color: #000000;">
							{{ urldecode($advertisement->currency) }}
							&nbsp;
							{{ $advertisement->price }}
						</span>
						</h4>
					@endif
					<div style="background-image: url('{{ $advertisement->image }}');background-repeat: no-repeat;width: 100%;padding: 10px;height: 150px;background-size: cover;">
						<div class="pull-left" style="color: #ffffff;">
							{{ $advertisement->subCategory->title }}
						</div>
						@if($advertisement->featured == '1')
							<div class="pull-right" style="background-color: #000000;padding: 4px 10px;border-radius: 10px;color: #ffffff;">
								Featured
							</div>
						@endif
					</div>
					@if($advertisement->type == '1')
						<img src="{{ asset('images/sell_ic.png') }}" style="display: inline;width: 32px;position: relative;bottom: 40px;right: 10px;" class="pull-right">
					@elseif($advertisement->type == '2')
						<img src="{{ asset('images/buy_ic.png') }}" style="display: inline;width: 32px;position: relative;bottom: 40px;right: 10px;" class="pull-right">
					@elseif($advertisement->type == '3')
						<img src="{{ asset('images/exchange_ic.png') }}" style="display: inline;width: 32px;position: relative;bottom: 40px;right: 10px;" class="pull-right">
					@endif
				</div>
			@empty
				<h5 class="text-center">There is no advertisement.</h5>
			@endforelse
		</div>
	</div>
</div>