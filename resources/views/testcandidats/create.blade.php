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
                                        ENRÉGITRER UN TEST CANDIDAT APPRENANT
                                </header>
                                <div class="row w3-res-tb">
                                    <a href="{{ url('/testcandidats') }}" title="Retour"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                                        <br />
                                        <br />

                                        @if ($errors->any())
                                            <ul class="alert alert-danger">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        @endif

                                        <form method="POST" action="{{ url('/testcandidats') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            @csrf
                                            @include ('testcandidats.form', ['formMode' => 'Créer'])

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
