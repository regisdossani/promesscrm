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

                        VOTRE DOSSIER DE PRÉINSCRIPTION
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
                        <a href="{{ url('candidats/'.$candidat->id.'/edit') }}"><button class="btn btn-warning "><i class="fa fa-eye" aria-hidden="true"></i> Modifier</button></a>
                            @csrf
                        <a href="{{ url('/')}}"><button class="btn btn-warning "><i class="fa fa-eye" aria-hidden="true"></i> Accueil</button></a>
                        <br/><br/><br/><br/>
                        <div class="col-sm-4">
                        </div>
                           {{--  <form method="POST" action="{{ url('/candidats' . '/' . $candidat->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Supprimer ce candidat" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
                            </form> --}}
                        <br/>
                    </div>

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>Genre</th>
                                    <td>{{ $candidat->sexe }}</td>
                                </tr>
                                <tr><th> Nom </th>
                                    <td> {{ $candidat->nom }} </td>
                                </tr>

                                <tr><th> Provenance </th>
                                    <td> {{ $candidat->provenance }} </td>
                                </tr>
                                <tr><th> Région </th>
                                    <td> {{ $candidat->region }} </td>
                                </tr>


                                <tr><th> Téléphone </th>
                                    <td> {{ $candidat->tel }} </td>
                                </tr>

                                <tr><th> Filière </th>
                                    <td>
                                        @if ($candidat->filiere)
                                        {{ $candidat->filiere->nom}}
                                        @endif
                                    </td>
                                </tr>
                                <tr><th> Promo </th>
                                    <td>
                                        @if ($candidat->promo)
                                        {{ $candidat->promo->nom}}
                                         @endif
                                    </td>
                                </tr>

                                <tr><th> Parrain </th>
                                    <td> {{ $candidat->parrain }} </td>
                                </tr>
                                <tr><th> Tél Parrain </th>
                                    <td> {{ $candidat->tel_parrain }} </td>
                                </tr>
                                <tr><th> Email Parrain  </th>
                                    <td> {{ $candidat->email_parrain }} </td>
                                </tr>
                                <tr><th> Reception Dossier  </th>
                                    <td>
                                        @if ($candidat->reception_dossier=='1')
                                                Oui
                                      @else
                                                Non
                                        @endif
                                    </td>
                                </tr>
                                <tr><th> Pj Depot de dossier(1)  </th>
                                    <td> {{ $candidat->pj_depotdossier }} </td>
                                </tr>
                                <tr><th> Pj Depot de dossier(2)  </th>
                                    <td> {{ $candidat->pj_depotdossier }} </td>
                                </tr>
                            </tbody>
                        </table>
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
