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

            <div class="panel panel-default">
                            <header class="panel-heading">
                                    MODIFIER UN FORMATEUR
                            </header>


                            <div class="row w3-res-tb">
                                <div class="col-sm-5 m-b-xs">

                                    @role('superadmin')
                                    <a href="{{ url('/formateurs') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                                    @else
                                        <a href="{{ url('/formateur/profile') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>

                                    @endrole

                                </div>
                                <br />
                                <div class="col-sm-4">
                                </div>
                                @if ($errors->any())
                                    <ul class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif


                                    <form method="POST" action="{{ url('/formateurs/' . $formateur->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                        {{ method_field('PATCH') }}
                                        {{ csrf_field() }}

                                        @include ('formateurs.form', ['formMode' => 'edit'])

                                    </form>
                                </div>
                            </div>

                </div>
            </div>

</section>
</section>

@endsection
