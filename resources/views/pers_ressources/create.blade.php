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

        <div class="table-agile-info">
            <div class="panel panel-default">

                            <header class="panel-heading">
                                <div class="panel-title">
                                    ENRÉGISTRER UNE PERSONNE RESSOURCE
                                </div>
                            </header>
                                <div class="card-body">
                                    <br />
                                    <a href="{{ url('/pers_ressources') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>


                                    @if ($errors->any())
                                        <ul class="alert alert-danger">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    @endif
                                    <div class="panel-body">

                                        <form method="POST" action="{{ url('/pers_ressources') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            @include ('pers_ressources.form', ['formMode' => 'Créer'])

                                        </form>
                                    </div>

                                </div>

                </div>
            </div>
       
</section>
</section>
@endsection
