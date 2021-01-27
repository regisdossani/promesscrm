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
                    <section  class="panel">

                        <header class="panel-heading">
                            <div class="panel-title">
                             MODIFIER UNE ENTREPRISE PARTENAIRE
                        </header>
                        <div class="card-header">Modifier entreprise #{{ $entreprise->id }}</div>
                        <div class="card-body">
                            <a href="{{ url('/entreprises') }}" title="Retour"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                            <br />

                            @if ($errors->any())
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif

                            <form method="POST" action="{{ url('/entreprises/' . $entreprise->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                {{ method_field('PATCH') }}
                                {{ csrf_field() }}

                                @include ('entreprises.form', ['formMode' => 'edit'])

                            </form>

                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>
</section>
@endsection
