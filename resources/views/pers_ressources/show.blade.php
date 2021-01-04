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
                    <section  class="card">
                        <header class="panel-heading">
                            <div class="panel-title">
                                AFFICHER UNE PERSONNE RESSOURCE
                            </div>
                        </header>
                            {{-- <div class="card-header">pers_ressource {{ $pers_ressource->id }}</div> --}}
                            <div class="card-body">

                                <a href="{{ url('/persressources') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                                <a href="{{ url('/persressources/' . $pers_ressource->id . '/edit') }}" title="Edit pers_ressource"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>

                                <form method="POST" action="{{ url('persressources' . '/' . $pers_ressource->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Supprimer cette perssonne ressource" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
                                </form>
                                <br/>
                                <br/>

                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th>ID</th><td>{{ $pers_ressource->id }}</td>
                                            </tr>
                                            <tr><th> Nom </th><td> {{ $pers_ressource->nom }} </td></tr><tr><th> Prenom </th><td> {{ $pers_ressource->prenom }} </td></tr><tr><th> Email </th><td> {{ $pers_ressource->email }} </td></tr>
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
