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
                    <div class="col-md-10">
                        <section class="panel">
                            <header class="panel-heading">
                                <div class="panel-title">
                                    AFFICHER UN PROFESSIONEL
                                </div>
                            </header>
                                {{-- <div class="card-header">professionnel {{ $professionnel->id }}</div> --}}
                                <div class="card-body">

                                    <a href="{{ url('/professionnels') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                                    <a href="{{ url('/professionnels/' . $professionnel->id . '/edit') }}" title="Modifier ce professionnel"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>

                                    <form method="POST" action="{{ url('/professionnels' . '/' . $professionnel->id) }}" accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Supprimer ce professionnel" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
                                    </form>
                                    <br/>
                                    <br/>

                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th>ID</th><td>{{ $professionnel->id }}</td>
                                                </tr>
                                                <tr><th> Nom </th><td> {{ $professionnel->nom }} </td></tr><tr><th> Date Naiss </th><td> {{ $professionnel->date_naiss }} </td></tr><tr><th> Tel 1 </th><td> {{ $professionnel->tel_1 }} </td></tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
@endsection
