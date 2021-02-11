<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Pré-Inscription</title>


    {{-- <link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' /> --}}
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
            <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
              aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>


          </nav>
        </div>
      </div>
    </header>
<section id="main-content">
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>

    <section class="wrapper">

        <div class="form-w3layouts">
            <div class="container">
                <div class="row">
            <div class="col-md-12">
                <div class="card">

                  {{--   <header class="panel-heading">
                        <div class="panel-title">
                            ENVOYER VOTRE  CANDIDATURE
                        </div>
                    </header> --}}
                    <div class="card-body">
                        <br />
                        <a href="{{route('frontend.index')}}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>



                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/candidat/checkemail') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('candidats.form', ['formMode' => 'Créer'])
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
    </section>
</section>
  <!-- JS -->
  <script src="{{('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{('vendor/jquery-validation/dist/jquery.validate.min.js')}}"></script>
  <script src="{{('vendor/jquery-validation/dist/additional-methods.min.js')}}"></script>
  <script src="{{asset('js/main.js')}}"></script>
</body>
</html>
