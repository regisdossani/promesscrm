<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Votre dossier</title>


    <link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" >
    {{-- <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet"/> --}}

  <!-- Main Stylesheet -->
   <link href="{{asset('css/frontstyle.css')}}" rel="stylesheet">



</head>
<body>
<header>
    <div class="navigation w-100">
        <div class="container">

            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <a class="navbar-brand" href="{{route('frontend.index')}}"><img src="images/logo.png" alt="logo"></a>
            {{-- <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
              aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
 --}}

          </nav>
        </div>
      </div>
    </header>
        <section class="wrapper">
            <div class="form-w3layouts">

                <div class="row">
                    <div class="col-lg-12">

                <section class="panel">
                    <header class="panel-heading">
                        <div class="panel-title">

                        MODIFIER VOTRE DOSSIER DE PRÉINSCRIPTION
                        </div>
                    </header>
                    <div class="panel-body">
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                        </div>
                        @endif
                        <br/><br/>
                        <a href="{{ url('/candidature') }}"><button class="btn btn-warning "><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                        <a href="{{ url('/candidats/' . $candidat->id . '/edit')}}"><button class="btn btn-warning "><i class="fa fa-eye" aria-hidden="true"></i> Modifier</button></a>

                        <a href="{{ url('/')}}"><button class="btn btn-warning "><i class="fa fa-eye" aria-hidden="true"></i> Accueil</button></a>
                        <br/><br/><br/><br/>
                        <div class="col-sm-4">
                        </div>
                        <br/>
                    </div>
                    <div class="row w3-res-tb">
                        <div class="col-sm-5 m-b-xs">
                            <a href="{{ url('/candidats') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                            @if ($errors->any())
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    <br/>
                    <br/>

                                <form method="POST" action="{{ url('/candidats/' . $candidat->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                    {{ method_field('PATCH') }}
                                    {{ csrf_field() }}

                                    @include ('candidats.form', ['formMode' => 'edit'])
                                </form>

                    </div>
        </div>
    </div>
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
