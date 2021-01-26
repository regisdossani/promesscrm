<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CRM PROMESS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
<body>
    @include('inc.styles')

    <section>
        <div class="log-w3">
            <div class="w3layouts-main">
                <h2>MENU CONNEXION</h2>
                <div class="card-body">


                       {{--  <div class="form-group">
                                <input type="email" class="ggg form-control @error('email') is-invalid @enderror" id="email" name="email"  placeholde="Votre email "value="{{ old('email') }}" required autocomplete="email" autofocus>
                                   @error('email')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                   @enderror
                        </div> --}}

                        {{-- <div class="form-group">
                            <input type="password" class="ggg form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div> --}}

                        <form action='{{ url("/admin")}}' method="GET">
                            <button  class="ggg ">Directeur Promess</button>
                        </form>

                        <form action='{{ url("/equipe")}}' method="GET">
                            <button  class="ggg">  Équipe Promess</button>
                        </form>

                        <form action='{{ url("/apprenant")}}' method="GET">
                            <button  class="ggg">Apprenant Promess</button>
                        </form>

                        <form action='{{ url("/formateur")}}' method="GET">
                            <button  class="ggg">Formateur Promess</button>
                        </form>


                                 <div class="clearfix"></div>

                </div>
                </div>
                   {{-- <p><a href="/register">Créer un compte</a></p> --}}
           </div>
     </div>


</section>

</body>
</html>
