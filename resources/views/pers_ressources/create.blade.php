@extends('inc.master')
@extends('inc.master')
@if (Auth::guard("admin")->check())
    @include('admins.sidebar')
@endif
@if (Auth::guard("equipe")->check())
    @include('equipes.sidebar')
@endif

@if (Auth::guard("apprenant")->check())
    @include('apprenants.sidebar')
@endif
@if (Auth::guard("formateur")->check())
    @include('formateurs.sidebar')
@endif


@section('content')
<section id="main-content">

<section class="wrapper">
    <div class="form-w3layouts">

        <div class="container">
            <div class="row">

                <div class="col-md-10">
                <div class="card">
                    <header class="panel-heading">
                        <div class="panel-title">
                            ENRÉGISTRER UNE PERSONNE RESSOURCE
                        </div>
                    </header>
                    {{-- <div class="card-header">Créer un pers_ressource</div> --}}
                    <div class="card-body">
                        <a href="{{ url('/persressources') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/persressources') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('pers_ressources.form', ['formMode' => 'Créer'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
</section>
@endsection
