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
                        <div class="row align-items-start">
                            <section  class="panel">
                                <header class="panel-heading">
                                    <div class="panel-title">
                                        GESTION DES NOUVEAUX CHANTIERS ÉCOLE
                                    </div>
                                </header>
                                {{-- <div class="card-header">Partenaires</div> --}}
                                <div class="panel-body">
                                    <br/>
                                        <a href="{{ url('/newchantiers/create') }}" class="btn btn-success btn-sm" title="Nouveau chantier">
                                            <i class="fa fa-plus" aria-hidden="true"></i> Nouveau
                                        </a>
                                        <div class="pull-right" style="margin-right:5px">

                                            <form method="GET" action="{{ url('/newchantiers') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Nom</th>
                                                            <th>Prénom</th>
                                                            <th>Structure</th>
                                                            <th>Téléphone</th>
                                                            <th>Email</th>
                                                            <th>État</th>
                                                            <th>#</th>

                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($newchantiers as $item)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $item->nom }}</td>
                                                            <td>{{ $item->prenom }}</td>
                                                            <td>{{ $item->structure }}</td>
                                                            <td>{{ $item->tel }}</td>
                                                            <td>{{ $item->email }}</td>
                                                            <td>
                                                                @if ($item->etat==1)
                                                                Réalisé
                                                                @endif
                                                                @if ($item->etat==2)
                                                                Non Réalisé
                                                                @endif
                                                            </td>
                                                            <td>{{ $item->valeur }}</td>
                                                            {{-- <td>{{ $item->description }}</td> --}}

                                                            <td>
                                                                <a href="{{ url('/newchantiers/' . $item->id) }}" title="Voir ce nouveau chantier"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                                                <a href="{{ url('/newchantiers/' . $item->id . '/edit') }}" title="Modifier  nouveau chantier"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </button></a>

                                                                <form method="POST" action="{{ url('/newchantiers' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                                    {{ method_field('DELETE') }}
                                                                    {{ csrf_field() }}
                                                                    <button type="submit" class="btn btn-danger btn-sm" title="Supprimer nouveau chantier" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> </button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                            </table>
                                        <div class="pagination-wrapper"> {!! $newchantiers->appends(['search' => Request::get('search')])->render() !!} </div>
                                    </div>

                                </div>
                            </section> 
                        </div>
                            
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
@endsection
