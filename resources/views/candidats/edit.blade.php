@extends('inc.master')
@role('apprenant')
@include('apprenants.sidebar')
@endrole
@role('superadmin')
@include('admins.sidebar')
@endrole
@role('Resp-Pedagogique')
@include('equipes.sidebar')
@endrole


@section('content')
<section id="main-content">
    <section class="wrapper">
		<div class="table-agile-info">
            <div class="panel panel-default">
                            <header class="panel-heading">
                                    MODIFIER LE CANDIDAT
                            </header>

                            <div class="row w3-res-tb">
                                <div class="col-sm-5 m-b-xs">
                                    <a href="{{ url('/candidats') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                                </div>
                                <br />
                                    @if ($errors->any())
                                        <ul class="alert alert-danger">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    @endif

                                        <form method="POST" action="{{ url('/candidats/' . $candidat->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                            {{ method_field('PATCH') }}
                                            {{ csrf_field() }}

                                            @include ('candidats.form', ['formMode' => 'edit'])
                                        </form>

                            </div>
                </div>
            </div>
    </section>
</section>
@endsection
