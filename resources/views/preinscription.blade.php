<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pré-Inscription</title>


    <link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" >
    <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet"/>

  <!-- Main Stylesheet -->
  <link href="{{asset('css/frontstyle.css')}}" rel="stylesheet">



</head>
<body>
<header>
    <div class="navigation w-100">
        <div class="container">

            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <a class="navbar-brand" href="{{route('frontend.index')}}"><img src="images/logo.png" alt="logo"></a>
            <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
              aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>


          </nav>
        </div>
      </div>
    </header>
        <section class="wrapper">
            <div class="form-w3layouts">

                <div class="row">
                    <div class="col-lg-12">
                        {{-- <div class="signup-img">
                    <img src="images/form-img.jpg" alt="">
                    <div class="signup-img-content">
                        <h2>Inscrivez-vous maintenant </h2>
                        <p>formez-vous sur le solaire !</p>
                    </div>
                </div> --}}
                <section class="panel">
                    <header class="panel-heading">
                        <div class="panel-title">

                        FORMULAIRE DE PRÉINSCRIPTION
                        </div>
                    </header>
                    <div class="panel-body">
                        <a href="{{ url('/') }}" title="Retour"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>

                        <div class="row">
                            <div class="panel-card">

                        <form method="POST" action="{{ url('/inscription') }}" accept-charset="UTF-8" class="register-form" id="register-form" enctype="multipart/form-data">
                                {{ csrf_field() }}

                            <div class="form-row">
                                <div class="col-md-2 form-group" {{ $errors->has('civilite') ? 'has-error' : ''}}">
                                    <div class="form-select">
                                        <label for="civilite" class="control-label">{{ 'Civilité :' }}</label>
                                        <div class="select-list">
                                            <select name="civilite" id="civilite" class="form-control">
                                                <option value="M">M</option>
                                                <option value="Mme">Mme</option>
                                                <option value="Mlle">Mlle</option>
                                            </select>
                                            {!! $errors->first('civilite', '<p class="help-block">:message</p>') !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 form-group {{ $errors->has('prenom') ? 'has-error' : ''}}">
                                    <label for="prenom" class="control-label">{{ 'Prénom :' }}</label>
                                    <input class="form-control" name="prenom" type="text" id="prenom" >
                                    {!! $errors->first('prenom', '<p class="help-block">:message</p>') !!}
                                </div>
                                <div class="col-md-4 form-group {{ $errors->has('nom') ? 'has-error' : ''}}">
                                    <label for="nom" class="control-label">{{ 'Nom :' }}</label>
                                    <input class="form-control" name="nom" type="text" id="nom" >
                                    {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
                                </div>
                                <div class=" col-md-2 form-group {{ $errors->has('date_naiss') ? 'has-error' : ''}}">
                                    <label for="date_naiss" class="control-label">{{ 'Date de Naissance :' }}</label>
                                    <input class="form-control" name="date_naiss" type="date" id="date_naiss" value="{{ isset($candidat->date_naiss) ? $candidat->date_naiss : ''}}" >
                                    {!! $errors->first('date_naiss', '<p class="help-block">:message</p>') !!}
                                </div>
						    </div>

                        <div class=" form-row">

                            <div class="col-md-6 form-group {{ $errors->has('email_1') ? 'has-error' : ''}}">
								<label for="email_1" class="control-label">{{ 'Email 1:' }}</label>
								<input class="form-control" name="email_1" type="text" id="email_1" value="{{ isset($candidat->email_1) ? $candidat->email_1 : ''}}" >
								{!! $errors->first('email_1', '<p class="help-block">:message</p>') !!}
                            </div>
                            <div class="col-md-6 form-group {{ $errors->has('email_2') ? 'has-error' : ''}}">
								<label for="email_2" class="control-label">{{ 'Email 2:' }}</label>
								<input class="form-control" name="email_2" type="text" id="email_2" value="{{ isset($candidat->email_2) ? $candidat->email_2 : ''}}" >
								{!! $errors->first('email_2', '<p class="help-block">:message</p>') !!}
							</div>

                        </div>

                        <div class="form-row">
                            <div class="col-md-6 form-group {{ $errors->has('tel_1') ? 'has-error' : ''}}">
								<label for="tel_1" class="control-label">{{'Téléphonel 1:' }}</label>
								<input class="form-control" name="tel_1" type="text" id="tel_1" value="{{ isset($candidat->tel_1) ? $candidat->tel_1 : ''}}" >
								{!! $errors->first('tel_1', '<p class="help-block">:message</p>') !!}
							</div>

							<div class="col-md-6 form-group {{ $errors->has('tel_2') ? 'has-error' : ''}}">
								<label for="tel_2" class="control-label">{{'Téléphone 2:' }}</label>
									<input class="form-control" name="tel_2" type="text" id="tel_2" value="{{ isset($candidat->tel_2) ? $candidat->tel_2 : ''}}" >
									{!! $errors->first('tel_2', '<p class="help-block">:message</p>') !!}
							</div>
                        </div>


                        <div class="form-row">
                            <div class="col-md-6 form-group {{ $errors->has('adresse') ? 'has-error' : ''}}">
                                <label for="adresse" class="control-label">{{ 'Adrsse :' }}</label>
                                <input class="form-control" name="adresse" type="text" id="adresse" value="{{ isset($candidat->date_naiss) ? $candidat->date_naiss : ''}}" >
                                {!! $errors->first('adresse', '<p class="help-block">:message</p>') !!}
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="choix_formation">Choix de la formation:</label>
                                <div class="select-list">
                                    <select name="choix_formation" id="formation">
                                        <option value=""></option>
                                        <option value="1">Formation initiale</option>
                                        <option value="2">Formation  intermédiaire</option>
                                        <option value="3">Formation continue </option>
                                        <option value="4">Formation de formateurs en PV </option>

                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>

                        </div>

				<div class="form-row">
                    @if(isset($candidat->pj_depotdossier) && !empty($candidat->pj_depotdossier))
                        <a href="{{ url('uploads/candidats/' . $candidat->pj_depotdossier) }}" ><i class="fa fa-download"></i> {{$candidat->pj_depotdossier}}</a>
                    @endif
                    <div class="col-md-6 form-group {{ $errors->has('pj_depotdossier') ? 'has-error' : ''}}">
                        <label for="pj_depotdossier" class="control-label">{{ 'Pièce jointe 2 (Depot de dossier)' }}</label>
                        <input class="form-control" name="pj_depotdossier" type="file" id="pj_depotdossier"  >
                        {!! $errors->first('pj_depotdossier', '<p class="help-block">:message</p>') !!}
                    </div>

                    @if(isset($candidat->pj_depotdossier) && !empty($candidat->pj_depotdossier2))
							<a href="{{ url('uploads/candidats/' . $candidat->pj_depotdossier2) }}" ><i class="fa fa-download"></i> {{$candidat->pj_depotdossier}}</a>
						@endif
						<div class="col-md-6 form-group {{ $errors->has('pj_depotdossier') ? 'has-error' : ''}}">
							<label for="pj_depotdossier" class="control-label">{{ 'Pièce jointe 2 (Depot de dossier)' }}</label>
							<input class="form-control" name="pj_depotdossier2" type="file" id="pj_depotdossier2"  >
							{!! $errors->first('pj_depotdossier2', '<p class="help-block">:message</p>') !!}
						</div>
                </div>

            @if(isset($candidat->avatar) && !empty($candidat->avatar))
                <a href="{{ url('uploads/candidats/' . $candidat->pj_depotdossier2) }}" ><i class="fa fa-download"></i> {{$candidat->pj_depotdossier}}</a>
            @endif
            <div class="col-md-6 form-group {{ $errors->has('avatar') ? 'has-error' : ''}}">
                <label for="avatar" class="control-label">{{ 'Photo' }}</label>
                <input class="form-control" name="avatar" type="file" id="avatar"  >
                {!! $errors->first('avatar', '<p class="help-block">:message</p>') !!}
            </div>

                <div class="form-row">
                        <div class="form-submit">
                            <input type="submit" value="Envoyer" class="submit" id="submit" name="submit" />
                            {{-- <input type="submit" value="Reset" class="submit" id="reset" name="reset" /> --}}
                        </div>
                </div>
			</form>
        </div>
        </div>
        </div>
        </section>

        </div>

     </div>
    </div>
    </section>
</section>

    <!-- JS -->
    <script src="{{('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{('vendor/nouislider/nouislider.min.js')}}"></script>
    <script src="{{('vendor/wnumb/wNumb.js')}}"></script>
    <script src="{{('vendor/jquery-validation/dist/jquery.validate.min.js')}}"></script>
    <script src="{{('vendor/jquery-validation/dist/additional-methods.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>
