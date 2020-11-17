<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
@extends('inc.master')
@include('formateurs.sidebar')
 @include('formateurs.header') 






@section('content')

<section id="container">
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<!-- //market-->
		<div class="market-updates">
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-1">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-graduation-cap" aria-hidden="true" style="font-size:36px;color:white"> </i>
					</div>
					 <div class="col-md-8 market-update-left">
					 <h4>Apprenants</h4>
					 <h3>13</h3>
					{{-- <p>Nombre d'Apprenants</p>  --}}
				  </div>
				  <div class="clearfix"> </div>
				</div>
			</div>

			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-3">
					<div class="col-md-4 market-update-right">
                        <i class="fas fa-chalkboard-teacher" style="font-size:40px;color:white"></i>
                    </div>
                        <div class="col-md-8 market-update-left">
						<h4> Ch. École</h4>
						<h3>2</h3>
					</div>
				  <div class="clearfix"> </div>
				</div>
            </div>


            <div class="clearfix"> </div>

		</div>
        <!-- //market-->
<!-- //market-->
<div class="market-updates">



    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-6">
            <div class="col-md-4 market-update-right">
                <i class="fa  fa-pencil-square-o" aria-hidden="true" style="font-size:36px;color:white"></i>
            </div>
            <div class="col-md-8 market-update-left">
                <h4>Modules</h4>
                <h3>2</h3>
                {{-- <p>Nombre de formations</p> --}}
            </div>
          <div class="clearfix"> </div>
        </div>
    </div>




   <div class="clearfix"> </div>


</div>


		<div class="agil-info-calendar">
		<!-- calendar -->
		<div class="col-md-6 agile-calendar">
			<div class="calendar-widget">
                <div class="panel-heading ui-sortable-handle">
					<span class="panel-icon">
                      <i class="fa fa-calendar-o"></i>
                    </span>
                    <span class="panel-title"> Emploi du temps</span>
                </div>
				<!-- grids -->
					<div class="agile-calendar-grid">
						<div class="page">

							<div class="w3l-calendar-left">
								<div class="calendar-heading">

								</div>
								<div class="monthly" id="mycalendar"></div>
							</div>

							<div class="clearfix"> </div>
						</div>
					</div>
			</div>
		</div>
		<!-- //calendar -->

			<!-- tasks -->
				<div class="col-md-4 agile-last-left">
					<div class="agile-last-grid">

						<div id="graph7"></div>
						<script>
						// This crosses a DST boundary in the UK.

						</script>

					</div>
				</div>

				{{-- <div class="col-md-4 agile-last-left agile-last-right">
					<div class="agile-last-grid">
						<div class="area-grids-heading">
							<h3>Annuel</h3>
						</div>
						<div id="graph9"></div>
						<script>
						var day_data = [
						  {"elapsed": "I", "value": 34},
						  {"elapsed": "II", "value": 24},
						  {"elapsed": "III", "value": 3},
						  {"elapsed": "IV", "value": 12},
						  {"elapsed": "V", "value": 13},
						  {"elapsed": "VI", "value": 22},
						  {"elapsed": "VII", "value": 5},
						  {"elapsed": "VIII", "value": 26},
						  {"elapsed": "IX", "value": 12},
						  {"elapsed": "X", "value": 19}
						];
						Morris.Line({
						  element: 'graph9',
						  data: day_data,
						  xkey: 'elapsed',
						  ykeys: ['value'],
						  labels: ['value'],
						  parseTime: false
						});
						</script>

					</div>
				</div> --}}
				<div class="clearfix"> </div>
			</div>
		<!-- //tasks -->
{{-- 		<div class="agileits-w3layouts-stats">
 				<div class="col-md-4 stats-info widget">
						<div class="stats-info-agileits">
							<div class="stats-title">
								<h4 class="title">Browser Stats</h4>
							</div>
							<div class="stats-body">
								<ul class="list-unstyled">
									<li>GoogleChrome <span class="pull-right">85%</span>
										<div class="progress progress-striped active progress-right">
											<div class="bar green" style="width:85%;"></div>
										</div>
									</li>
									<li>Firefox <span class="pull-right">35%</span>
										<div class="progress progress-striped active progress-right">
											<div class="bar yellow" style="width:35%;"></div>
										</div>
									</li>
									<li>Internet Explorer <span class="pull-right">78%</span>
										<div class="progress progress-striped active progress-right">
											<div class="bar red" style="width:78%;"></div>
										</div>
									</li>
									<li>Safari <span class="pull-right">50%</span>
										<div class="progress progress-striped active progress-right">
											<div class="bar blue" style="width:50%;"></div>
										</div>
									</li>
									<li>Opera <span class="pull-right">80%</span>
										<div class="progress progress-striped active progress-right">
											<div class="bar light-blue" style="width:80%;"></div>
										</div>
									</li>
									<li class="last">Others <span class="pull-right">60%</span>
										<div class="progress progress-striped active progress-right">
											<div class="bar orange" style="width:60%;"></div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-8 stats-info stats-last widget-shadow">
						<div class="stats-last-agile">
							<table class="table stats-table ">
								<thead>
									<tr>
										<th>S.NO</th>
										<th>PRODUCT</th>
										<th>STATUS</th>
										<th>PROGRESS</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">1</th>
										<td>Lorem ipsum</td>
										<td><span class="label label-success">In progress</span></td>
										<td><h5>85% <i class="fa fa-level-up"></i></h5></td>
									</tr>
									<tr>
										<th scope="row">2</th>
										<td>Aliquam</td>
										<td><span class="label label-warning">New</span></td>
										<td><h5>35% <i class="fa fa-level-up"></i></h5></td>
									</tr>
									<tr>
										<th scope="row">3</th>
										<td>Lorem ipsum</td>
										<td><span class="label label-danger">Overdue</span></td>
										<td><h5 class="down">40% <i class="fa fa-level-down"></i></h5></td>
									</tr>
									<tr>
										<th scope="row">4</th>
										<td>Aliquam</td>
										<td><span class="label label-info">Out of stock</span></td>
										<td><h5>100% <i class="fa fa-level-up"></i></h5></td>
									</tr>
									<tr>
										<th scope="row">5</th>
										<td>Lorem ipsum</td>
										<td><span class="label label-success">In progress</span></td>
										<td><h5 class="down">10% <i class="fa fa-level-down"></i></h5></td>
									</tr>
									<tr>
										<th scope="row">6</th>
										<td>Aliquam</td>
										<td><span class="label label-warning">New</span></td>
										<td><h5>38% <i class="fa fa-level-up"></i></h5></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>--}}
</section>

</section>
<!--main content end-->
<!-- //calendar -->

@stop
