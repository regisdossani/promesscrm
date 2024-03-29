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
                    <div class="col-md-10">
                        <section  class="panel">
                            <div class="card">
                                <div class="card-title">
                                    GESTION DES ENTREPRISES PARTENAIRES
                                </div>
                            </div>
                        <div class="card-body ">
                            <br/>
                            <a href="{{ url('/entpartenaires/create') }}" class="btn btn-success btn-sm" title="Nouvelle  entreprise">
                                <i class="fa fa-plus" aria-hidden="true"></i> Nouvelle
                            </a>
                            <div class="pull-right" style="margin-right:5px">

                                <form method="GET" action="{{ url('/entpartenaires') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="search" placeholder="Rechercher..." value="{{ request('search') }}">
                                        <span class="form-group-append">
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
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Raison Sociale</th>
                                                <th>Référence</th>
                                                <th>Activité Entreprise</th>
                                                <th>Responsable</th>
                                                <th>Téléphone</th>

                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($entpartenaires as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->raison_sociale }}</td>
                                                <td>{{ $item->reference }}</td>
                                                <td>{{ $item->activite_entreprise }}</td>
                                                <td>{{ $item->responsable }}</td>
                                                <td>{{ $item->contact_tel }}</td>

                                                <td>
                                                    <a href="{{ url('/entpartenaires/' . $item->id) }}" title="Voir cette entreprise"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> </button></a>
                                                    <a href="{{ url('/entpartenaires/' . $item->id . '/edit') }}" title="Modufier cette entreprise"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </button></a>

                                                    <form method="POST" action="{{ url('/entpartenaires' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-danger btn-sm" title="Supprimer cette entreprise" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="pagination-wrapper"> {!! $entpartenaires->appends(['search' => Request::get('search')])->render() !!} </div>
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
