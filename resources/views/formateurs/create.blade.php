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
                                <header class="panel-heading">
                                        CRÉER UN FORMATEUR
                                </header>

                                <div class="row w3-res-tb">
                                    <br />
                                    @role('superadmin')

                                        <a href="{{ url('/formateurs') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                                    @endrole
                                            @if ($errors->any())
                                                <ul class="alert alert-danger">
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                            <div class="panel-body">

                                                <form method="POST" action="{{ url('/formateurs') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                                    {{ csrf_field() }}

                                                    @include ('formateurs.form', ['formMode' => 'Créer'])

                                                </form>
                                            </div>
                                    </div>

    </div>
</section>
</section>
@endsection
