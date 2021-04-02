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
                            <div class="panel-title">
                                GESTION DES STAGES
                            </div>
                        </header>
                        <div class="panel-body">

                                <a href="{{ url('/stages/create') }}" class="btn btn-success btn-sm" title="Add New stage">
                                    <i class="fa fa-plus" aria-hidden="true"></i> Nouveau
                                </a>
                                <div class="pull-right" style="margin-right:5px">

                                    <form method="GET" action="{{ url('/stages') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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

                                <div class="table-responsive">
                                    <table class="table table-striped b-t b-light">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Date</th>
                                                <th>Durée</th>
                                                <th>Référent </th>
                                                <th>Entreprise </th>
                                                <th>Encadreur </th>

                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($stages as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->date }}</td>
                                                <td>{{ $item->duree }}</td>
                                                <td>{{ $item->referent }}</td>
                                                <td>{{ $item->entreprise }}</td>
                                                <td>@if ($item->encadreur)
                                                        {{ $item->encadreur->noms }}
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ url('/stages/' . $item->id) }}" title="Voir ce stage"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                                    <a href="{{ url('/stages/' . $item->id . '/edit') }}" title="Modifier ce stage"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </button></a>

                                                    <form method="POST" action="{{ url('/stages' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-danger btn-sm" title="Supprimer ce stage" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="pagination-wrapper"> {!! $stages->appends(['search' => Request::get('search')])->render() !!} </div>
                                </div>

                        </div>
                </div>
            </div>

</section>
</section>
@endsection
