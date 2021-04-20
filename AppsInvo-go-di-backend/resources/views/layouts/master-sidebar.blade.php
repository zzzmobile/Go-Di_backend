		<div class="col-md-2 " style="padding:0px; margin: 0px;    ">
          <div class="left_col scroll-view">
        <center>    <div class="navbar nav_title text-center" style="border: 0;margin-top:5px; width: auto; margin-left: 50px;">
		{{ Html::image(asset('images/logo/logo.png'), config('app.name'), ['width' => '100', 'class' => 'text-center']) }}

			      </div>  </center> 

            <div class="clearfix"></div>
            <br /><br /><br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <!--<h3>General</h3>-->
                <ul class="nav side-menu">

                  @if (Request::is('/dashboard'))
                    <li class="active">
                  @else
                    <li>
                  @endif
                    {!! html_entity_decode(link_to_route('admin-dashboard', '<i class="fa fa-dashboard"></i> Manage Dashboard')) !!}
                  </li>

                  @if (Request::is('/'))
          				  <li class="active">
          				@else
          					<li>
          				@endif
          					{!! html_entity_decode(link_to_route('admin-business_card', '<i class="fa fa-address-card"></i> Manage Business Cards')) !!}
                  </li>

                  <!--  @if (Request::is('/'))
                    <li class="active">
                  @else
                    <li>
                  @endif
                    {!! html_entity_decode(link_to_route('admin-card_creater', '<i class="fa fa-user"></i> Business Cards creater')) !!}
                  </li> -->
   @if (Request::is('/categories'))
                    <li class="active">
                  @else
                    <li>
                  @endif
                    {!! html_entity_decode(link_to_route('admin-categories', '<i class="fa fa-sitemap" aria-hidden="true"></i> Manage Categories')) !!}
                  </li>
            

   @if (Request::is('/users'))
                    <li class="active">
                  @else
                    <li>
                  @endif
                    {!! html_entity_decode(link_to_route('admin-users', '<i class="fa fa-user" aria-hidden="true"></i> Manage Users')) !!}
                  </li>
            

        				  @if (Request::is('login') || Request::is('change-password'))
        					<li class="active">
        				  @else
        					<li>
        				  @endif
        				  <a><i class="fa fa-cog"></i>Settings<span class="fa fa-chevron-down"></span></a>
        					<ul class="nav child_menu">
        					  @if(Request::is('change-password'))
        						<li class="active">
        					  @else
        						<li>
        					  @endif
        						{{ link_to_route('admin-change-password-view', 'Change Password', [], []) }}
        					  </li>

                    <li>{{ link_to_route('admin-logout', 'Log Out', [], []) }}</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
