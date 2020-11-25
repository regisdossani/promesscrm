@extends('inc.master')
@include('inc.header')

@section('content')
<section class="wrapper">
    <div class="form-w3layouts">

        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <section  class="panel">
                        {{-- <div class="card-header">Créer un membre de l'équipe Pomess</div> --}}
                        <header class="panel-heading">
                            <div class="panel-title">
                                CRÉER UN MEMBRE DE L'ÉQUIPE PROMESS
                        </header>

                        <div class="panel-body">
                            <a href="{{ url('/equipes') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                            <br />
                            <br />
                            @if ($errors->any())
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                            <div class="row">

                                <form method="POST" action="{{ url('/equipes') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                    {{ csrf_field() }}

                                    @include ('equipes.form', ['formMode' => 'Créer'])

                                </form>

                            </div>
                    </div>
                    </div>
            </div>
        </div>
    </div>
</section>
@endsection
