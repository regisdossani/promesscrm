

@extends('inc.master')
@role('equipe')
@include('equipes.sidebar')
@endrole
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
                        <section  class="panel">

                            <header class="panel-heading">
                                <div class="panel-title">
                                 ENRÉGISTRER UNE ENTREPRISE PARTENAIRE
                            </header>
                            <div class="card-header">Enrégistrer une Entreprise</div>
                            <div class="panel-body">
                              
                                    <a href="{{ url('/entreprises') }}" title="Précé"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                                    <br />


                                @if ($errors->any())
                                    <ul class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif

                                <form method="POST" action="{{ url('/entreprises') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                    {{ csrf_field() }}

                                    @include ('entreprises.form', ['formMode' => 'Créer'])

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
