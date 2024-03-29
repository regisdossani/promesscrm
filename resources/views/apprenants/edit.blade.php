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
                                    MODIFIER UN APPRENANT
                            </header>

                            <div class="panel-body">
                                @if (Auth::guard("admin")->check())
                                    <a href="{{ url('/apprenants') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                                @endif
                                @if (Auth::guard("apprenant")->check())
                                    {{-- <a href="{{ url('/apprenant/profile') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a> --}}
                                    <a href="{{ url('/apprenant') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                                @endif

                                @role('Resp-pedagogique')
                                    <a href="{{ url('/apprenants') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                                @endrole

                                <br />

                                @if ($errors->any())
                                    <ul class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif

                                <div class="row">

                                    <form method="POST" action="{{ url('/apprenants/' . $apprenant->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                        {{ method_field('PATCH') }}
                                        {{ csrf_field() }}

                                        @include ('apprenants.form', ['formMode' => 'edit'])

                                    </form>

                                </div>
                            </div>
                    </div>
                </div>
      
</section>
</section>
@endsection
