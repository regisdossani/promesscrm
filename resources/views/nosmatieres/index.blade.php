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
                                        GESTION DES PARAMÈTRES(MATIÈRE)
                                </header>

                                <div class="row w3-res-tb">
                                    <div class="col-sm-5 m-b-xs">

                                        <a href="{{ url('/nosmatieres/create') }}" class="btn btn-success btn-sm" title="Add New nosmatiere">
                                                <i class="fa fa-plus" aria-hidden="true"></i>Nouveau
                                        </a>
                                    </div>
                                    <div class="col-sm-4">
                                    </div>
                                        <div class="pull-right" style="margin-right:5px">

                                            <form method="GET" action="{{ url('/nosmatieres') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                </div>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Nom</th>
                                                            <th>Référence</th>
                                                            <th>Formateur</th>
                                                            <th>Réf. Formateur</th>

                                                            <th>Coef</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($nosmatieres as $item)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $item->nom }}</td>
                                                            <td>{{ $item->reference }}</td>
                                                            <td>@if ($item->formateur)
                                                                {{ $item->formateur->nom }}
                                                                @endif
                                                            </td>
                                                            <td>@if ($item->formateur)
                                                                {{ $item->formateur->reference }}
                                                                @endif
                                                            </td>
                                                            <td>{{ $item->coef }}</td>

                                                            <td>
                                                                <a href="{{ url('/nosmatieres/' . $item->id) }}" title="Voir cette matiere"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> </button></a>
                                                                <a href="{{ url('/nosmatieres/' . $item->id . '/edit') }}" title="Modifier cette matiere"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </button></a>

                                                                <form method="POST" action="{{ url('/nosmatieres' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                                    {{ method_field('DELETE') }}
                                                                    {{ csrf_field() }}
                                                                    <button type="submit" class="btn btn-danger btn-sm" title="Supprimer cette matiere" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> </button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                                <div class="pagination-wrapper"> {!! $nosmatieres->appends(['search' => Request::get('search')])->render() !!} </div>
                                            </div>

                                        </div>


            </div>

</section>
</section>
@endsection
