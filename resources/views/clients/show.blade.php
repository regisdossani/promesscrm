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
                    <div class="col-md-9">
                        <section class="card">
                            <header class="panel-heading">
                                <div class="panel-title">
                                    AFFICHER UN CLIENT
                                </div>
                            </header>
                            <div class="card-header">client {{ $client->id }}</div>
                                <div class="card-body">
                                    <a href="{{ url('/clients') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Retour</button></a>
                                    <a href="{{ url('/clients/' . $client->id . '/edit') }}" title="Edit client"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>

                                    <form method="POST" action="{{ url('clients' . '/' . $client->id) }}" accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete client" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
                                    </form>
                                    <br/>
                                    <br/>

                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th>ID</th><td>{{ $client->id }}</td>
                                                </tr>
                                                <tr><th> Civilité </th><td> {{ $client->civilite }} </td></tr><tr><th> Prénom </th><td> {{ $client->prenom }} </td></tr><tr><th> Nom </th><td> {{ $client->nom }} </td></tr>
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
