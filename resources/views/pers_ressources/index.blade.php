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
                                    GESTION DES PERSONNES RESSOURCES DE PROMESS
                            </header>
                        <div class="card-body">
                            <br/>
                            <a href="{{ url('/pers_ressources/create') }}" class="btn btn-success btn-sm" title="Ajouter une nouvelle personne ressource">
                                <i class="fa fa-plus" aria-hidden="true"></i> Nouveau
                            </a>

                            <div class="pull-right" style="margin-right:3px">
                                <form method="GET" action="{{ url('/pers_ressources') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="search" placeholder="Rechercher..." value="{{ request('search') }}">
                                        <span class="input-group-append">
                                            <button class="btn btn-secondary" type="submit">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                            <br/>
                            <br/>
                            <div class="table-responsive">
                                <table style="width: 100%; display: table; table-layout: fixed;" class="table table-striped table-bordered text-center table-hover table-responsive">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nom</th>
                                            <th>Réf</th>
                                            <th>Sexe</th>
                                            <th>Tél</th>
                                            {{-- <th>Email</th> --}}
                                            <th>Qualité</th>
                                            <th>Spécialité</th>
                                        {{--  <th>Atelier de juillet_2018</th>
                                            <th>formation dejanvier_2019</th> --}}

                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($pers_ressources as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->nom }}</td>
                                            <td>{{ $item->reference }}</td>
                                        <td>{{ $item->sexe }}</td>
                                            <td>{{ $item->tel }}</td>
                                            {{-- <td>{{ $item->email }}</td> --}}
                                            <td>{{ $item->qualite }}</td>
                                            <td>{{ $item->specialites }}</td>
                                        {{--  <td>{{ $item->atelier_de_juillet_2018  }}</td>
                                            <td>{{ $item->formation_de_janvier_2019 }}</td> --}}

                                            <td>
                                                <a href="{{ url('/pers_ressources/' . $item->id) }}" title="Voir personne_ressource"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                                <a href="{{ url('/pers_ressources/' . $item->id . '/edit') }}" title="Modifier personne_ressource"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>

                                                <form method="POST" action="{{ url('/pers_ressources' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm" title="Supprimer personne_ressource" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="pagination-wrapper"> {!! $pers_ressources->appends(['search' => Request::get('search')])->render() !!} </div>
                            </div>

                    </div>
            </div>

    </div>
</section>
</section>
@endsection
