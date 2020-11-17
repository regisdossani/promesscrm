<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
@extends('inc.master')
@include('equipes.sidebar')
@include('inc.header')

@section('content')

<section id="container">
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
        <!-- //market-->

		<div class="market-updates">
            @role('Resp-Pedagogique')
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-1">
                    <a class="active"  href="{{url('/apprenants') }}">
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

				<div class="market-update-block clr-block-2">
                    <a class="active"  href="{{url('/candidats') }}">

					<div class="col-md-4 market-update-right">
						<i class="fa fa-users" ></i>
					</div>
					<div class="col-md-8 market-update-left">
                    <h4>Gestion des Candidats</h4>

                    </div>
                </a>
				  <div class="clearfix"> </div>
				</div>
            </div>



			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-3">
                    <a class="active"  href="{{url('/formateurs') }}">

					<div class="col-md-4 market-update-right">
                        <i class="fas fa-chalkboard-teacher" style="font-size:40px;color:white"></i>
                    </div>
                        <div class="col-md-8 market-update-left">
						<h4> Gestion des Formateurs</h4>
                    </div>
                </a>
				  <div class="clearfix"> </div>
				</div>
            </div>


            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-5">
                    <a class="active"  href="{{url('/stages') }}">

                    <div class="col-md-4 market-update-right">
                        <i class="fa  fa-retweet" aria-hidden="true" style="font-size:36px;color:white"></i>
                    </div>
                    <div class="col-md-8 market-update-left">
                        <h4>Gestion des Stages</h4>
                    </div>
                  <div class="clearfix"> </div>
                </div>
            </div>
        </a>
            <div class="clearfix"> </div>

        </div>

        <!-- //market-->
<!-- //market-->

<div class="market-updates">
    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-4">
            <div class="col-md-4 market-update-right">
                <a class="active"  href="{{url('/stock') }}">

                <i class="fas  fa-user" style="font-size:36px;color:white"></i>                    </div>
                <div class="col-md-8 market-update-left">
                <h4>Gestion des Stocks </h4>
            </div>
        </a>

          <div class="clearfix"> </div>
        </div>
    </div>
    {{-- <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-6">
            <div class="col-md-4 market-update-right">
                <i class="fa  fa-pencil-square-o" aria-hidden="true" style="font-size:36px;color:white"></i>
            </div>
            <div class="col-md-8 market-update-left">
                <h4>Liste des Chantiers</h4>
            </div>
          <div class="clearfix"> </div>
        </div>
    </div> --}}
    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-7">
            <div class="col-md-4 market-update-right">
                <i class="fa  fa-table" aria-hidden="true" style="font-size:36px;color:white"></i>
            </div>
            <div class="col-md-8 market-update-left">
                <h4>Gestion des tests d'entrée</h4>

            </div>
          <div class="clearfix"> </div>
        </div>
    </div>


    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-8">
            <a class="active"  href="{{url('/partenaires') }}">

            <div class="col-md-4 market-update-right">
                <i class="fa  fa-table" aria-hidden="true" style="font-size:36px;color:white"></i>
            </div>
            <div class="col-md-8 market-update-left">

                    <h4>Liste  des partenaires</h4>

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

                <h4>Gestion des notes</h4>

            </div>
          <div class="clearfix"> </div>
        </div>
    </div>


   <div class="clearfix"> </div>


</div>



<div class="market-updates">

    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-9">
            <a class="active"  href="{{url('/persressources') }}">

            <div class="col-md-4 market-update-right">

                <i class="fas  fa-user" style="font-size:36px;color:white"></i>                    </div>
                <div class="col-md-8 market-update-left">
                <h4>Liste des personnes ressources </h4>
            </div>
        </a>
          <div class="clearfix"> </div>
        </div>
    </div>
    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-6">
            <div class="col-md-4 market-update-right">
                <i class="fa  fa-pencil-square-o" aria-hidden="true" style="font-size:36px;color:white"></i>
            </div>
            <div class="col-md-8 market-update-left">
                <h4>Voir animation du reseau</h4>
            </div>
          <div class="clearfix"> </div>
        </div>
    </div>
    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-11">
            <div class="col-md-4 market-update-right">
                <i class="fa  fa-table" aria-hidden="true" style="font-size:36px;color:white"></i>
            </div>
            <div class="col-md-8 market-update-left">
                <h4>Gestion du référentiel</h4>

            </div>
          <div class="clearfix"> </div>
        </div>
    </div>



   <div class="clearfix"> </div>


</div>
@endrole



@role('Resp-Admin-Comptable')
<div class="market-updates">
    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-4">
            <div class="col-md-4 market-update-right">

                <i class="fas  fa-user" style="font-size:36px;color:white"></i>                    </div>
                <div class="col-md-8 market-update-left">
                <h4>Créer ou modifier le suivi horaire équipe  </h4>
            </div>
          <div class="clearfix"> </div>
        </div>
    </div>
    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-6">
            <div class="col-md-4 market-update-right">
                <i class="fa  fa-pencil-square-o" aria-hidden="true" style="font-size:36px;color:white"></i>
            </div>
            <div class="col-md-8 market-update-left">
                <h4>Créer ou modifier contrat Chantiers École</h4>
            </div>
          <div class="clearfix"> </div>
        </div>
    </div>
    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-7">
            <div class="col-md-4 market-update-right">
                <i class="fa  fa-table" aria-hidden="true" style="font-size:36px;color:white"></i>
            </div>
            <div class="col-md-8 market-update-left">
                <h4>Créer ou modifier suivi horaire formateurs</h4>

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

                <h4>Créer ou modifier contrat prestataires</h4>

            </div>
            <div class="clearfix"> </div>


        </div>
@endrole


@role('Resp-Relation-Ext')
<div class="market-updates">

			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-1">
                    <a class="active"  href="#">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-graduation-cap" aria-hidden="true" style="font-size:36px;color:white"> </i>
                    </div>
					 <div class="col-md-8 market-update-left">
                        <h4>Suivi des Apprenants post-formation</h4>
                    </div>

                </a>
				  <div class="clearfix"> </div>
				</div>
            </div>

			<div class="col-md-3 market-update-gd">

				<div class="market-update-block clr-block-2">
                    <a class="active"  href="#">

					<div class="col-md-4 market-update-right">
						<i class="fa fa-users" ></i>
					</div>
					<div class="col-md-8 market-update-left">
                    <h4>Suivi animation réseau</h4>

                    </div>
                </a>
				  <div class="clearfix"> </div>
				</div>
            </div>



			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-3">
                    <a class="active"  href="#">

					<div class="col-md-4 market-update-right">
                        <i class="fas fa-chalkboard-teacher" style="font-size:40px;color:white"></i>
                    </div>
                        <div class="col-md-8 market-update-left">
						<h4> Fiche description partenariat</h4>
                    </div>
                </a>
				  <div class="clearfix"> </div>
				</div>
            </div>


            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-5">
                    <a class="active"  href="#">

                    <div class="col-md-4 market-update-right">
                        <i class="fa  fa-retweet" aria-hidden="true" style="font-size:36px;color:white"></i>
                    </div>
                    <div class="col-md-8 market-update-left">
                        <h4>Suivi des échanges partenariat</h4>
                    </div>
                  <div class="clearfix"> </div>
                </div>
            </div>
        </a>
            <div class="clearfix"> </div>

        </div>

        <div class="col-md-3 market-update-gd">
            <div class="market-update-block clr-block-5">
                <a class="active"  href="#">

                <div class="col-md-4 market-update-right">
                    <i class="fa  fa-retweet" aria-hidden="true" style="font-size:36px;color:white"></i>
                </div>
                <div class="col-md-8 market-update-left">
                    <h4>Suivi inventaire et stocks équipements à
                        disposition des apprenants en post formation</h4>
                </div>
              <div class="clearfix"> </div>
            </div>
        </div>
    </a>
        <div class="clearfix"> </div>

    </div>





    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-3">
            <a class="active"  href="#">

            <div class="col-md-4 market-update-right">
                <i class="fas fa-chalkboard-teacher" style="font-size:40px;color:white"></i>
            </div>
                <div class="col-md-8 market-update-left">
                <h4> Fiche description stages et
                    périodes de formation hors
                    centre</h4>
            </div>
        </a>
          <div class="clearfix"> </div>
        </div>
    </div>




<div class="col-md-3 market-update-gd">
    <div class="market-update-block clr-block-5">
        <a class="active"  href="#">

        <div class="col-md-4 market-update-right">
            <i class="fa  fa-retweet" aria-hidden="true" style="font-size:36px;color:white"></i>
        </div>
        <div class="col-md-8 market-update-left">
            <h4>Suivi inventaire et stocks équipements à
                disposition des apprenants en post formation</h4>
        </div>
      <div class="clearfix"> </div>
    </div>
</div>
</a>
<div class="clearfix"> </div>

</div>

@endrole



</section>

</section>
<!--main content end-->
<!-- //calendar -->

@stop
