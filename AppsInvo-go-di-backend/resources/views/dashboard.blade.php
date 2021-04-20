@extends('layouts.master')


@push('cssCode')
<style>
.clientTable{
  margin:20px auto;
  font-size:15px;
  font-weight: bold;
}

.clientTable tr td{
  padding: 4px;
  /* text-align: center; */
}
.nav-tabs li.active a{
  background-color: #41B3AB !important;
  color: #ffffff !important;
}
table td .btn{
  margin-right: 0px !important;
}
.text-right-width{
  text-align: right;
  width: 50%;
}
.profile-img{
  width: 150px;
    margin: 20px auto;
    border: 3px solid #000000;
    height: 150px;
}
</style>
@endpush

@section('content')
       <div class=" col-md-10" role="main" style="background: #fff;">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Dashboard</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="">
                  <div class="x_title">
             
                  
                    <div class="clearfix"></div>
          {{-- START ALERT BLOCK --}}
          @if(Session::has('successMessage'))
            <div class="alert alert-success" role="alert">
              <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              {!! html_entity_decode(session('successMessage')) !!}
            </div>
          @endif
          @if(Session::has('dangerMessage') || count($errors))
            <div class="alert alert-danger" role="alert">
              <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              {!! html_entity_decode(session('dangerMessage')) !!}
              {{ $errors->first() }}
            </div>
          @endif
          {{-- END ALERT BLOCK --}}
                  </div>

<style type="text/css">
  .container-fluid {
    padding: 0 30px;
}
.container-fluid {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}section.dashboard-counts .row {
    padding: 30px 15px;
    margin: 0;
}.has-shadow {
    -webkit-box-shadow: 2px 2px 2px rgba(0,0,0,0.1), -1px 0 2px rgba(0,0,0,0.05);
    box-shadow: 2px 2px 2px rgba(0,0,0,0.1), -1px 0 2px rgba(0,0,0,0.05);
}section.dashboard-counts div[class*='col-'] .item {
    border-right: 1px solid #eee;
    padding: 15px 0;
}
.align-items-center {
    -ms-flex-align: center!important;
    align-items: center!important;
}
.d-flex {
    display: -ms-flexbox!important;
    display: flex!important;
}section.dashboard-counts .icon {
    width: 40px;
    height: 40px;
    line-height: 40px;
    text-align: center;
    min-width: 40px;
    max-width: 40px;
    border-radius: 50%;
}
.bg-violet {
    background: #796AEE !important;
    color: #fff;
}section.dashboard-counts .title {
    font-size: 1.1em;
    font-weight: 300;
    color: #777;
    margin: 0 20px;
}a, i, span {
    display: inline-block;
    text-decoration: none;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
}section.dashboard-counts .progress {
    margin-top: 10px;
    height: 4px;
}
.progress {
    display: -ms-flexbox;
    display: flex;
    height: 1rem;
    overflow: hidden;
    font-size: .75rem;
    background-color: #e9ecef;
    border-radius: .25rem;
}.bg-violet {
    background: #796AEE !important;
    color: #fff;
}
.progress-bar {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    -ms-flex-pack: center;
    justify-content: center;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    background-color: #007bff;
    transition: width .6s ease;
}section.dashboard-counts .number {
    font-size: 1.8em;
    font-weight: 300;
}.col-xl-3 {
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
}
</style>

                  <div class="" style="height: 800px;">
          <div class="">
<!--            <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
                // Item 
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-violet"><i class="fa fa-user"></i></div>
                    <div class="title"><span>Total<br>Users</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 50%; height: 4px;" aria-valuenow="{{ $users_count }}" aria-valuemin="0" aria-valuemax="1000000" class="progress-bar bg-violet"></div>
                      </div>
                    </div>
                    <div class="number"><strong>{{ $users_count }}</strong></div>
                  </div>
                </div>
                //Item 
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-red"><i class="icon-padnote"></i></div>
                    <div class="title"><span>Work<br>Orders</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 70%; height: 4px;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>
                      </div>
                    </div>
                    <div class="number"><strong>70</strong></div>
                  </div>
                </div>
                // Item 
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-green"><i class="icon-bill"></i></div>
                    <div class="title"><span>New<br>Invoices</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 40%; height: 4px;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
                      </div>
                    </div>
                    <div class="number"><strong>40</strong></div>
                  </div>
                </div>
                //Item
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-orange"><i class="icon-check"></i></div>
                    <div class="title"><span>Open<br>Cases</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 50%; height: 4px;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-orange"></div>
                      </div>
                    </div>
                    <div class="number"><strong>50</strong></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
 -->

          <!-- top tiles -->
          <div class="row tile_count" style="background-color: #EDEDED;" align="center">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style="margin-top: 5px;">
              <div class="count">{{ $users_count }}</div>
              <span class="count_top"><i class="fa fa-user"></i> Total Users</span>              
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style="margin-top: 5px;">
              <div class="count">{{ $guest_users_count }}</div>              
              <span class="count_top"><i class="fa fa-clock-o"></i> Guest Users</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style="margin-top: 5px;">
              <div class="count green">{{ $users_count-$guest_users_count }}</div>
              <span class="count_top"><i class="fa fa-user"></i> Logged In Users</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style="margin-top: 5px;">
              <div class="count">{{ $current_month_users_count }}</div>
              <span class="count_top"><i class="fa fa-user"></i> New User Current Month</span>              
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style="margin-top: 5px;">
              <div class="count">{{ $six_month_users_count }}</div>
              <span class="count_top"><i class="fa fa-user"></i> New User Last 6 Month</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style="margin-top: 5px;">
              <div class="count">$0</div>
              <span class="count_top"><i class="fa fa-user"></i> Total Revenue</span>              
            </div>
          </div>
          <!-- /top tiles -->


                <div class="col-sm-12" align="center">                         
                  <span style="font-size: 22px;">Last 6 Month Users</span>
                </div> 
           

                <div class="col-sm-12" align="center">  
                 
                    <canvas id="myChart" height="100px;" width="300px;"></canvas>

                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>

                    <script type="text/javascript">
                      var ctx = document.getElementById("myChart").getContext('2d');
                      var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                          labels: [
                                    "{{ $months[0] }}",
                                    "{{ $months[1] }}",
                                    "{{ $months[2] }}",
                                    "{{ $months[3] }}",
                                    "{{ $months[4] }}",
                                    "{{ $months[5] }}",
                          ],
                          datasets: [{
                            label: 'Total Users',
                            data: [
                                    {{ $total_users[0] }},
                                    {{ $total_users[1] }},
                                    {{ $total_users[2] }},
                                    {{ $total_users[3] }},
                                    {{ $total_users[4] }},
                                    {{ $total_users[5] }},
                                ],
                            backgroundColor: "#405072"
                          }, {
                            label: 'Guest Users',
                            data: [
                                    {{ $guest_users[0] }},
                                    {{ $guest_users[1] }},
                                    {{ $guest_users[2] }},
                                    {{ $guest_users[3] }},
                                    {{ $guest_users[4] }},
                                    {{ $guest_users[5] }},
                              ],
                            backgroundColor: "#65448e"
                          }]
                        }
                      });
                    </script>                      
                                       
                </div>              
                
                <div class="col-sm-12" align="center">                         
                  <span style="font-size: 22px;">Card Categories</span>
                  
                </div> 
                <div class="col-sm-12" align="center">

                  <link rel="stylesheet" href="css/styles.css">
                  <div id="canvas-holder" style="width: 500px;"> <!-- id="canvas-holder" -->
                  <canvas id="chart-area" width="440" height="400" />
                  </div>
                  <div id="chartjs-tooltip"></div>
                  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
                  <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js'></script>
                  <script type="text/javascript">
                    
                    window.chartColors = {
                      red: 'rgb(255, 99, 132)',
                      orange: 'rgb(255, 159, 64)',
                      yellow: 'rgb(255, 205, 86)',
                      green: 'rgb(75, 192, 192)',
                      blue: 'rgb(54, 162, 235)',
                      purple: 'rgb(153, 102, 255)',
                      grey: 'rgb(231,233,237)',
                      LightGray: 'LightGray',
                      tomato: 'tomato',
                      violet: 'violet',
                      SlateBlue: 'SlateBlue',
                      DodgerBlue: 'DodgerBlue',
                      MediumSeaGreen: 'MediumSeaGreen',
                      Aqua: 'Aqua',
                      Black: 'Black',
                    };

                    Chart.defaults.global.tooltips.custom = function(tooltip) {
                      // Tooltip Element
                      var tooltipEl = document.getElementById('chartjs-tooltip');

                      // Hide if no tooltip
                      if (tooltip.opacity === 0) {
                        tooltipEl.style.opacity = 0;
                        return;
                      }

                      // Set Text
                      if (tooltip.body) {
                        var total = 0;

                        // get the value of the datapoint
                        var value = this._data.datasets[tooltip.dataPoints[0].datasetIndex].data[tooltip.dataPoints[0].index].toLocaleString();

                        // calculate value of all datapoints
                      this._data.datasets[tooltip.dataPoints[0].datasetIndex].data.forEach(function(e) {
                          total += e;
                        });

                        // calculate percentage and set tooltip value
                        tooltipEl.innerHTML = '<h1>' + (value / total * 100) + '%</h1>';
                      }

                      // calculate position of tooltip
                      var centerX = (this._chartInstance.chartArea.left + this._chartInstance.chartArea.right) / 2;
                      var centerY = ((this._chartInstance.chartArea.top + this._chartInstance.chartArea.bottom) / 2);

                      // Display, position, and set styles for font
                      tooltipEl.style.opacity = 1;
                      tooltipEl.style.left = centerX + 'px';
                      tooltipEl.style.top = centerY + 'px';
                      tooltipEl.style.fontFamily = tooltip._fontFamily;
                      tooltipEl.style.fontSize = tooltip.fontSize;
                      tooltipEl.style.fontStyle = tooltip._fontStyle;
                      tooltipEl.style.padding = tooltip.yPadding + 'px ' + tooltip.xPadding + 'px';

                    };

                    var config = {
                      type: 'doughnut',
                      data: {
                        datasets: [{
                          data: [10, 9, 8, 13, 6,11,10,3,2,1,15,12],
                          backgroundColor: [
                            window.chartColors.red,
                            window.chartColors.orange,
                            window.chartColors.yellow,
                            window.chartColors.green,
                            window.chartColors.blue,
                            window.chartColors.tomato,
                            window.chartColors.violet,
                           /* window.chartColors.SlateBlue,
                            window.chartColors.DodgerBlue,
                            window.chartColors.LightGray,
                            window.chartColors.MediumSeaGreen,*/
                            //window.chartColors.Aqua,
                           // window.chartColors.Black,
                          ],
                        }],
                        labels: [ 
                          <?php 
                                foreach ($category as $key => $value) {
                                  echo "'$value->tempcat_name',";
                                }
                           ?>
                        ]
                      },
                      options: {
                        responsive: true,
                        legend: {
                          display: true,
                           position: 'bottom',
                          labels: {
                            padding: 5
                          },
                        },
                        tooltips: {
                          enabled: false,
                        }
                      }
                    };

                    window.onload = function() {
                        var ctx = document.getElementById("chart-area").getContext("2d");
                        window.myPie = new Chart(ctx, config);
                    };

                  </script>
                </div> 
          
            </div>
              
          </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


@endsection

  

@push('jsCode')
<script>
$.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
      }
    });

$(document).on('click', '.pagination li a', function(e){
  e.preventDefault();
  var url = $(this).attr('href');
  $('#searchForm').attr('action', url);
  console.log($('#searchForm').attr('action'));
  $('#searchForm').submit();
});



function checkInActive(){
  return confirm("Are you sure you want to Deactivate?");
}

function checkActive(){
  return confirm("Are you sure you want to Activate?");
}

function check(){
  return confirm("Are you sure you want to delete?");
}

$(document).ready(function(){
  disabledSearchBtn();
  
  $(document).on('change', '#searchForm select', function(){
    disabledSearchBtn();
  });
  
  $(document).on('keyup', '#searchForm input', function(){
    disabledSearchBtn();
  });
  
  function disabledSearchBtn(){
    var searchBtn = false;
    $('.filters').each(function(){
      if($(this).val() != ''){
        searchBtn = true;
        return true;
      }
    });
    
    if(searchBtn){
      $('#searchBtn').removeAttr('disabled');
    }
    else{
      $('#searchBtn').attr('disabled', true);
    }
  }
});
</script>
@endpush
