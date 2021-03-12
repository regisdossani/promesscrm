@extends('inc.master')

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
                COMPLETER SES INFORMATIONS POUR CRÉER UN RELEVÉ DES NOTES
             </header>
                        <div class="card-body">
                            <a href="{{ url('/marks') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                            <br />
                            <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/releve_individuel') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('releves.individuel.form', ['formMode' => 'Créer'])

                        </form>

                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
