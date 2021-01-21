@extends('inc.master')

@role('superadmin')
@include('admins.sidebar')
@endrole
@role('Resp-Pedagogique')
@include('equipes.sidebar')
@endrole
@role('apprenant')
@include('apprenants.sidebar')
@endrole


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
                            ENRÉGISTRER UN CANDIDAT
                        </div>
                    </header>
                    <div class="card-body">
                        <br />
                        <a href="{{ url('/candidats') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>



                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/candidats') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('candidats.form', ['formMode' => 'Créer'])

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
