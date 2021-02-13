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

		<div class="table-agile-info">

            <div class="panel panel-default">
                <div class="card">
                    <header class="panel-heading">
                            ENRÉGISTRER UN CANDIDAT
                    </header>
                    <div class="row w3-res-tb">
                        <div class="col-sm-5 m-b-xs">

                            <a href="{{ url('/candidats') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>

                                @if ($errors->any())
                                    <ul class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                        </div>
                        <div class="col-sm-4">
                        </div>
                        <form method="POST" action="{{ url('/candidats') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('candidats.form', ['formMode' => 'Créer'])

                        </form>

                    </div>
                </div>
            </div>

        </div>
    </section>
</section>
@endsection
