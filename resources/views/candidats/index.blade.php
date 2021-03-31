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
                                    GESTION DES CANDIDATS
                            </header>

                            <div class="row w3-res-tb">
                                <div class="col-sm-5 m-b-xs">
                                    @role('superadmin')
                                        <a href="{{ url('/admin') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                                        <a href="{{ url('/candidats/create') }}" class="btn btn-success btn-sm" title="Nouveau candidat">
                                            <i class="fa fa-plus" aria-hidden="true"></i> PréInscription
                                        </a>
                                    @endrole
                                    @role('Resp-Pedagogique')
                                        <a href="{{ url('/equipe') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                                        <a href="{{ url('/candidats/create') }}" class="btn btn-success btn-sm" title="Nouveau candidat">
                                            <i class="fa fa-plus" aria-hidden="true"></i> PréInscription
                                        </a>
                                    @endrole
                                </div>
                                <div class="col-sm-4">
                                </div>
                               
                                <div class="pull-right" style="margin-right:5px">

                                            <form method="GET" action="{{ url('/candidats') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="search" placeholder="Rechercher..." value="{{ request('search') }}">
                                                        <button class="btn btn-secondary" type="submit">
                                                            <i class="fa fa-search"></i></button>
                                                </div>
                                            </form>
                            </div>
                        </div>
                        <br/>
                        <div class="table-responsive">
                                    <table class="table table-striped b-t b-light">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Genre</th>
                                                <th>Nom</th>
                                                <th>Téléphone</th>
                                                <th>Provenance</th>
                                                <th>Région</th>
                                                <th>Filière</th>
                                                {{-- <th>Promo</th> --}}
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($candidats as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->sexe }}</td>

                                                <td>{{ $item->nom }}</td>
                                                <td>{{ $item->tel }}</td>

                                                <td>{{ $item->provenance }}</td>
                                               <td>{{ $item->region }}</td>

                                                <td>
                                                    @if ($item->filiere)
                                                    {{ $item->filiere->nom}}
                                                    @endif
                                                </td>
                                               {{--  <td>
                                                    @if ($item->promo)
                                                            {{ $item->promo['nom']}}
                                                    @endif
                                                </td> --}}

                                            {{--  <td><img alt="avatar" src={{url('uploads/candidats/'.$item->avatar) }}  width="50" height="50"></td>--}}
                                                <td>
                                                    <a href="{{ url('/candidats/' . $item->id) }}" title="Voir ce candidat"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> </button></a>
                                                    <a href="{{ url('/candidats/' . $item->id . '/edit') }}" title="Modifier ce candidat"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>

                                                    <form method="POST" action="{{ url('/candidats' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-danger btn-sm" title="Supprimer ce candidat" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="pagination-wrapper"> {!! $candidats->appends(['search' => Request::get('search')])->render() !!} </div>
                                </div>

                            </div>
                        </div>

                    {{-- </section> --}}
                {{-- </div> --}}
            </div>

    </div>
</section>
</section>
@endsection
