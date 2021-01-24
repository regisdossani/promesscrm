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
                    <div class="col-md-12">
                        <section  class="panel">
                            <header class="panel-heading">
                                <div class="panel-title">
                                    CRÉER UNE NOUVELLE PROMO
                                </div>
                            </header>
                            {{-- <div class="card-header">Partenaires</div> --}}
                            <div class="panel-body">
                                <br/>
                                    <a href="{{ url('/promos') }}" title="Retour"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Retour</button></a>
                                    <br />
                                    <br />

                                    @if ($errors->any())
                                        <ul class="alert alert-danger">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    @endif

                                    <form method="POST" action="{{ url('/promos') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                        {{ csrf_field() }}

                                        @include ('promos.form', ['formMode' => 'Créer'])

                                    </form>

                             </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
@endsection