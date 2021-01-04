@extends('inc.master')

@role('superadmin')
@include('admins.sidebar')
@endrole

@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="form-w3layouts">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <section class="panel">
                            <header class="panel-heading">
                                <div class="panel-title">
                                    ENRÉGISTRER UN STAGIAIRES
                                </div>
                            </header>
                                    {{-- <div class="card-header">Créer un stagiaire</div> --}}
                                <div class="card-body">
                                    <a href="{{ url('/stagiaires') }}" title="Retour"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Retour</button></a>
                                    <br />
                                    <br />

                                    @if ($errors->any())
                                        <ul class="alert alert-danger">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    @endif

                                    <form method="POST" action="{{ url('/stagiaires') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                        {{ csrf_field() }}

                                        @include ('stagiaires.form', ['formMode' => 'Créer'])

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
