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
                                    {{-- <div class="card-header">Liste de l'équipe Promess</div> --}}
                                        <header class="panel-heading">
                                                GESTION PERSONNEL ADMINISTRATIF
                                        </header>
                                        <div class="panel-body">

                                                <br/>
                                                <a href="{{ url('/admin') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                                                <a href="{{ url('/equipes/create') }}" class="btn btn-success btn-sm" title="Ajouter un nouveau dans l'équipe">
                                                    <i class="fa fa-plus" aria-hidden="true"></i> Nouveau
                                                </a>

                                                    <div class="pull-right" style="margin-right:5px">

                                                        <form method="GET" action="{{ url('/equipes') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                                </div>
                                                            <br/>
                                                            <br/>
                                                            <br/>
                                                            <div class="table-responsive">
                                                                <table class="table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>#</th>
                                                                            <th>Nom & Prénom</th>
                                                                            <th>Référence</th>
                                                                        {{-- <th>Sexe</th> --}}
                                                                            <th>Téléphone</th>
                                                                            {{-- <th>Email</th> --}}
                                                                            <th>Rôle</th>
                                                                            <th>Actions</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    @foreach($equipes as $item)
                                                                        <tr>
                                                                            <td>{{ $loop->iteration }}</td>
                                                                            <td>{{ $item->nom_prenom }}</td>
                                                                            <td>{{ $item->reference }}</td>
                                                                            {{-- <td>{{ $item->sexe }}</td> --}}
                                                                            <td>{{ $item->tel }}</td>
                                                                            {{-- <td>{{ $item->email }}</td> --}}
                                                                            <td>
                                                                                @if(!empty($item->getRoleNames()))
                                                                                    @foreach($item->getRoleNames() as $v)
                                                                                        <label class="badge badge-success">{{ $v }}</label>
                                                                                    @endforeach
                                                                                @endif
                                                                            </td>

                                                                        {{--   <td>
                                                                            @isset($item->photo)
                                                                                    <img alt="photo" src={{url('uploads/equipe/'.$item->photo) }}  width="50" height="50">
                                                                            @endisset
                                                                            </td> --}}
                                                                            <td>
                                                                                <a href="{{ url('/equipes/' . $item->id) }}" title="Voir ce membre"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                                                                <a href="{{ url('/equipes/' . $item->id . '/edit') }}" title="Modifier ce membre"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>

                                                                                <form method="POST" action="{{ url('/equipes' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                                                    {{ method_field('DELETE') }}
                                                                                    {{ csrf_field() }}
                                                                                    <a href="#"><button type="submit" class="btn btn-danger btn-sm" title="Supprimer ce membre" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o fa-fw"></i></button></a>
                                                                                </form>
                                                                            </td>
                                                                        </tr>
                                                                    @endforeach
                                                                    </tbody>
                                                                </table>
                                                                <div class="pagination-wrapper"> {!! $equipes->appends(['search' => Request::get('search')])->render() !!} </div>
                                                            </div>

                                        </div>
                            </div>
                     
            </section>
    </section>
@endsection
