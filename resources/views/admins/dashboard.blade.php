@extends('inc.master')

@section('content')
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
       {{--  <input type="text" class="form-control search"
        id="myInput" onkeyup="myFunction()"  placeholder=" Rechercher"> --}}
<!-- //market-->



		<!-- //market-->
<div id="myUL">
        <div class="market-updates">
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-1">
                    <a href="{{url('apprenants')}}">
					<div class="col-md-4 market-update-right">
                            <i class="fa fa-graduation-cap" aria-hidden="true" style="font-size:36px;color:white"> </i>
                    </div>
					 <div class="col-md-8 market-update-left">
					 <h4>Gestion des Apprenants</h4>
                  </div>
                </a>
				  <div class="clearfix"> </div>
				</div>
            </div>


			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-1">
                    <a href="{{url('candidats')}}">

                        <div class="col-md-4 market-update-right">
                            <i class="fa fa-users" ></i>
                        </div>
                        <div class="col-md-8 market-update-left">
                            <h4>Candidats Apprenants</h4>
                        </div>
                    </a>
				  <div class="clearfix"> </div>
				</div>
            </div>


			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-1">
                    <a href="{{url('formateurs')}}">
					<div class="col-md-4 market-update-right">
                        <i class="fas fa-chalkboard-teacher" style="font-size:40px;color:white"></i>
                    </div>
                        <div class="col-md-8 market-update-left">
						<h4>Gestion des Formateurs</h4>
                    </div>
                    </a>
				  <div class="clearfix"> </div>
				</div>
            </div>

            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-1">
                    <a href="{{url('/testcandidats')}}">
                    <div class="col-md-4 market-update-right">
                        <i class="fas fa-chalkboard-teacher" style="font-size:40px;color:white"></i>
                    </div>
                        <div class="col-md-8 market-update-left">
                        <h4>Tests Candidats Apprenant</h4>
                    </div>
                    </a>
                  <div class="clearfix"> </div>
                </div>

        </div>
        <div class="clearfix"> </div>
</div>





<div class="market-updates">

    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-6">
            <a href="{{url('/equipes')}}">
            <div class="col-md-4 market-update-right">
                <i class="fas  fa-user" style="font-size:36px;color:white"></i>                    </div>
                <div class="col-md-8 market-update-left">
                <h4>Personnel Administrative</h4>
            </div>
            </a>
          <div class="clearfix"> </div>
        </div>
    </div>

     <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-6">
            <a href="{{url('/encadreurs')}}">

            <div class="col-md-4 market-update-right">
                <i class="fa  fa-pencil-square-o" aria-hidden="true" style="font-size:36px;color:white"></i>
            </div>
            <div class="col-md-8 market-update-left">
                <h4>Gestion des Encadreurs</h4>
            </div>
            </a>
          <div class="clearfix"> </div>
        </div>
    </div>


    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-6">
            <a href="{{url('/modules')}}">

            <div class="col-md-4 market-update-right">
                <i class="fa  fa-pencil-square-o" aria-hidden="true" style="font-size:36px;color:white"></i>
            </div>
            <div class="col-md-8 market-update-left">
                <h4>Gestion des Modules</h4>
            </div>
            </a>
          <div class="clearfix"> </div>
        </div>
    </div>

    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-6">
            <a href="{{ url('roles') }}">

            <div class="col-md-4 market-update-right">
                <i class="fa  fa-table" aria-hidden="true" style="font-size:36px;color:white"></i>
            </div>
            <div class="col-md-8 market-update-left">
                <h4>Gestion des Rôles</h4>

            </div>
            </a>
          <div class="clearfix"> </div>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>




<div class="market-updates">
    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-5">
            <a href="{{url('/promos')}}">

                <div class="col-md-4 market-update-right">
                    <i class="fa  fa-table" aria-hidden="true" style="font-size:36px;color:white"></i>
                </div>
                <div class="col-md-8 market-update-left">
                    <h4>Gestion des Promos</h4>

                </div>
            </a>
        <div class="clearfix"> </div>
        </div>
    </div>

    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-5">
            <a href="{{url('/filieres')}}">
            <div class="col-md-4 market-update-right">
                <i class="fa  fa-pencil-square-o" aria-hidden="true" style="font-size:36px;color:white"></i>
            </div>
            <div class="col-md-8 market-update-left">
                <h4>Gestion des Filières</h4>
            </div>
            </a>
          <div class="clearfix"> </div>
        </div>
    </div>



    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-5">
            <div class="col-md-4 market-update-right">
                <i class="fa  fa-table" aria-hidden="true" style="font-size:36px;color:white"></i>
            </div>
            <div class="col-md-8 market-update-left">
                <a href="{{ url('classe') }}" >
                    <h4>Classes</h4>
                </a>
            </div>
          <div class="clearfix"> </div>
        </div>
    </div>




    <div class="market-updates">
        <div class="col-md-3 market-update-gd">
            <div class="market-update-block clr-block-5">
                <a href="{{url('/stages')}}">

                <div class="col-md-4 market-update-right">
                    <i class="fa  fa-retweet" aria-hidden="true" style="font-size:36px;color:white"></i>
                </div>
                <div class="col-md-8 market-update-left">
                    <h4>Stages école</h4>
                </div>
                </a>
              <div class="clearfix"> </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>


    <div class="market-updates">

    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-8">
            <a href="{{url('/chantiers')}}">

            <div class="col-md-4 market-update-right">
                <i class="fa  fa-table" aria-hidden="true" style="font-size:36px;color:white"></i>
            </div>
            <div class="col-md-8 market-update-left">
                <h4>Chantiers école réalisés</h4>

            </div>
            </a>
          <div class="clearfix"> </div>
        </div>
    </div>



<div class="col-md-3 market-update-gd">
    <div class="market-update-block clr-block-8">
        <a href="{{url('/newchantiers')}}">

        <div class="col-md-4 market-update-right">
            <i class="fa  fa-table" aria-hidden="true" style="font-size:36px;color:white"></i>
        </div>
        <div class="col-md-8 market-update-left">
            <h4>Gestion des Chantiers école</h4>

        </div>
        </a>
      <div class="clearfix"> </div>
    </div>
</div>


<div class="col-md-3 market-update-gd">
    <div class="market-update-block clr-block-8">
        <a href="{{url('/entpartenaires')}}">

        <div class="col-md-4 market-update-right">
            <i class="fa  fa-table" aria-hidden="true" style="font-size:36px;color:white"></i>
        </div>
        <div class="col-md-8 market-update-left">
                <h4>Entreprises Partenaires</h4>
        </div>
        </a>
      <div class="clearfix"> </div>
    </div>
</div>

<div class="col-md-3 market-update-gd">
    <div class="market-update-block clr-block-8">
        <a href="{{url('/partenaires')}}">

                <div class="col-md-4 market-update-right">
                    <i class="fa  fa-table" aria-hidden="true" style="font-size:36px;color:white"></i>
                </div>
                <div class="col-md-8 market-update-left">
                    <h4>Gestion des Partenaires</h4>
                </div>
        </a>
        <div class="clearfix"> </div>
    </div>
</div>
<div class="clearfix"> </div>

</div>






<div class="market-updates">


<div class="col-md-3 market-update-gd">
    <div class="market-update-block clr-block-10">
        <a href="{{url('/teacherattendances')}}">

        <div class="col-md-4 market-update-right">
            <i class="fa  fa-pencil-square-o" aria-hidden="true" style="font-size:36px;color:white"></i>
        </div>
        <div class="col-md-8 market-update-left">
            <h4>Suivi horaire (formateurs)</h4>
        </div>
        </a>
      <div class="clearfix"> </div>
    </div>
</div>





<div class="col-md-3 market-update-gd">
    <div class="market-update-block clr-block-10">
        <a href="{{url('/attendances')}}">
        <div class="col-md-4 market-update-right">
            <i class="fa  fa-retweet" aria-hidden="true" style="font-size:36px;color:white"></i>
        </div>
        <div class="col-md-8 market-update-left">
            <h4>Suivi horaire école</h4>
        </div>
        </a>
      <div class="clearfix"> </div>
    </div>
</div>

<div class="col-md-3 market-update-gd">
    <div class="market-update-block clr-block-10">
        <a href="{{url('/eqattendance')}}">
        <div class="col-md-4 market-update-right">
            <i class="fa  fa-pencil-square-o" aria-hidden="true" style="font-size:36px;color:white"></i>
        </div>
        <div class="col-md-8 market-update-left">
            <h4>Suivi horaire Équipe </h4>
        </div>
        </a>
      <div class="clearfix"> </div>
    </div>
</div>
<div class="col-md-3 market-update-gd">
    <div class="market-update-block clr-block-10">
        <a href="{{url('/pers_ressources')}}">

        <div class="col-md-4 market-update-right">
            <i class="fa  fa-retweet" aria-hidden="true" style="font-size:36px;color:white"></i>
        </div>
        <div class="col-md-8 market-update-left">
            <h4>Personnes ressource</h4>
        </div>
        </a>
      <div class="clearfix"> </div>
    </div>
</div>
   <div class="clearfix"> </div>
</div>
















<div class="market-updates">

    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-5">
            <a href="{{url('/nosmatieres')}}">

            <div class="col-md-4 market-update-right">
                <i class="fa  fa-retweet" aria-hidden="true" style="font-size:36px;color:white"></i>
            </div>
            <div class="col-md-8 market-update-left">
                <h4>Gestion des matières</h4>
            </div>
            </a>
          <div class="clearfix"> </div>
        </div>
    </div>
     <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-7">
            <a href="{{url('marks')}}">

            <div class="col-md-4 market-update-right">
                <i class="fa  fa-retweet" aria-hidden="true" style="font-size:36px;color:white"></i>
            </div>
            <div class="col-md-8 market-update-left">
                <h4>Gestion des Notes </h4>
            </div>
            </a>
          <div class="clearfix"> </div>
        </div>
    </div>




    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-7">
            <a href="{{url('/releve')}}">

            <div class="col-md-4 market-update-right">
                <i class="fa  fa-pencil-square-o" aria-hidden="true" style="font-size:36px;color:white"></i>
            </div>
            <div class="col-md-8 market-update-left">
                <h4>Créer un Relevé Individuel</h4>
            </div>
            </a>
          <div class="clearfix"> </div>
        </div>
    </div>

    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-8">
            <div class="col-md-4 market-update-right">
                <i class="fa  fa-table" aria-hidden="true" style="font-size:36px;color:white"></i>
            </div>
            <div class="col-md-8 market-update-left">
                <a href='{{ url('relevefinal') }}' >
                    <span>Créer un Relevé final</span>
                </a>
            </div>
          <div class="clearfix"> </div>
        </div>
    </div>

    <div class="clearfix"> </div>

</div>

<div class="market-updates">
<div class="col-md-3 market-update-gd">
    <div class="market-update-block clr-block-8">
        <a href="{{url('/clients')}}">

            <div class="col-md-4 market-update-right">
                <i class="fa  fa-table" aria-hidden="true" style="font-size:36px;color:white"></i>
            </div>
            <div class="col-md-8 market-update-left">
                <h4>Gestion des Clients</h4>

            </div>
        </a>
      <div class="clearfix"> </div>
    </div>
</div>


<div class="col-md-3 market-update-gd">
    <div class="market-update-block clr-block-8">
        <div class="col-md-4 market-update-right">
            <i class="fa  fa-table" aria-hidden="true" style="font-size:36px;color:white"></i>
        </div>
        <div class="col-md-8 market-update-left">
            <a href='{{ url('types') }}' >
                <h4>Gestion des types (Stock)</h4>
            </a>
        </div>
      <div class="clearfix"> </div>
    </div>
</div>

<div class="col-md-3 market-update-gd">
    <div class="market-update-block clr-block-8">
        <div class="col-md-4 market-update-right">
            <i class="fa  fa-table" aria-hidden="true" style="font-size:36px;color:white"></i>
        </div>
        <div class="col-md-8 market-update-left">
            <a href='{{ url('stock') }}' >
                <h4>Gestion des Stock</h4>
            </a>
        </div>
      <div class="clearfix"> </div>
    </div>
</div>

{{-- <div class="col-md-3 market-update-gd">
    <div class="market-update-block clr-block-8">
        <div class="col-md-4 market-update-right">
            <i class="fa  fa-table" aria-hidden="true" style="font-size:36px;color:white"></i>
        </div>
        <div class="col-md-8 market-update-left">
            <a href='{{ url('nosmatieres') }}' >
                <h4>Gestion des enseignements</h4>
            </a>
        </div>
      <div class="clearfix"> </div>
    </div>
</div> --}}

<div class="col-md-3 market-update-gd">
    <div class="market-update-block clr-block-8">
        <div class="col-md-4 market-update-right">
            <i class="fa  fa-table" aria-hidden="true" style="font-size:36px;color:white"></i>
        </div>
        <div class="col-md-8 market-update-left">
            <a href='{{ url('chartjs') }}' >
                <h4>Statistiques</h4>
            </a>
        </div>
      <div class="clearfix"> </div>
    </div>
</div>


            </div>
        </div>
 </div>





				{{-- <div class="col-md-4 agile-last-left agile-last-middle">
					<div class="agile-last-grid">
						<div class="area-grids-heading">
							<h3>Quotidien</h3>
						</div>
						<div id="graph8"></div>
						<script>
						/* data stolen from http://howmanyleft.co.uk/vehicle/jaguar_'e'_type */
						var day_data = [
						  {"period": "2016-10-01", "licensed": 3407, "sorned": 660},
						  {"period": "2016-09-30", "licensed": 3351, "sorned": 629},
						  {"period": "2016-09-29", "licensed": 3269, "sorned": 618},
						  {"period": "2016-09-20", "licensed": 3246, "sorned": 661},
						  {"period": "2016-09-19", "licensed": 3257, "sorned": 667},
						  {"period": "2016-09-18", "licensed": 3248, "sorned": 627},
						  {"period": "2016-09-17", "licensed": 3171, "sorned": 660},
						  {"period": "2016-09-16", "licensed": 3171, "sorned": 676},
						  {"period": "2016-09-15", "licensed": 3201, "sorned": 656},
						  {"period": "2016-09-10", "licensed": 3215, "sorned": 622}
						];
						Morris.Bar({
						  element: 'graph8',
						  data: day_data,
						  xkey: 'period',
						  ykeys: ['licensed', 'sorned'],
						  labels: ['Licensed', 'SORN'],
						  xLabelAngle: 60
						});
						</script>
					</div>
				</div> --}}
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
				</div> --
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

<!-- footer -->
    <div class="footer">
        <div class="wthree-copyright">
        <p> CRM PROMESS. Tous les droits reservés © 2021 </p>
        </div>
    </div>
<!-- / footer -->

</section>
<!--main content end-->
</section>
{{-- </section> --}}
<!-- morris JavaScript -->
<script>
    $(document).ready(function() {
    //BOX BUTTON SHOW AND CLOSE
    jQuery('.small-graph-box').hover(function() {
      jQuery(this).find('.box-button').fadeIn('fast');
    }, function() {
      jQuery(this).find('.box-button').fadeOut('fast');
    });
    jQuery('.small-graph-box .box-close').click(function() {
      jQuery(this).closest('.small-graph-box').fadeOut(200);
      return false;
    });

    //CHARTS
    function gd(year, day, month) {
        return new Date(year, month - 1, day).getTime();
    }

    graphArea2 = Morris.Area({
        element: 'hero-area',
        padding: 10,
    behaveLikeLine: true,
    gridEnabled: false,
    gridLineColor: '#dddddd',
    axes: true,
    resize: true,
    smooth:true,
    pointSize: 0,
    lineWidth: 0,
    fillOpacity:0.85,
        data: [
            {period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
            {period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
            {period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
            {period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
            {period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
            {period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
            {period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
            {period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
            {period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},

        ],
        lineColors:['#eb6f6f','#926383','#eb6f6f'],
        xkey: 'period',
        redraw: true,
        ykeys: ['iphone', 'ipad', 'itouch'],
        labels: ['Tous Utilisateurs', 'Returning Utililisateurs', 'Unique Utilisateur'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true
    });


    });
    </script>

    <!-- calendar -->
    <script type="text/javascript" src="{{asset('js/monthly.js')}}"></script>
    <script type="text/javascript">
    $(window).load( function() {

        $('#mycalendar').monthly({
            mode: 'event',

        });

        $('#mycalendar2').monthly({
            mode: 'picker',
            target: '#mytarget',
            setWidth: '250px',
            startHidden: true,
            showTrigger: '#mytarget',
            stylePast: true,
            disablePast: true
        });

    switch(window.location.protocol) {
    case 'http:':
    case 'https:':
    // running on a server, should be good.
    break;
    case 'file:':
    alert('Just a heads-up, events will not work when run locally.');
    }

    });
    </script>
<!-- calendar -->
<script type="text/javascript" src="{{ asset('js/monthly.js')}}"></script>
<script type="text/javascript">
    $(window).load( function() {

        $('#mycalendar').monthly({
            mode: 'event',

        });

        $('#mycalendar2').monthly({
            mode: 'picker',
            target: '#mytarget',
            setWidth: '250px',
            startHidden: true,
            showTrigger: '#mytarget',
            stylePast: true,
            disablePast: true
        });

    switch(window.location.protocol) {
    case 'http:':
    case 'https:':
    // running on a server, should be good.
    break;
    case 'file:':
    alert('Just a heads-up, events will not work when run locally.');
    }

    });
</script>
<!-- //calendar -->


 @endsection
