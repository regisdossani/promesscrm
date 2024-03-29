@extends('inc.master')


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
                                    GESTION DES APPRENANTS
                            </header>
                            <div class="row w3-res-tb">
                                <div class="col-sm-5 m-b-xs">

                                        @hasanyrole('superadmin')
                                            <a href="{{ url('/admin') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                                            <a href="{{ url('/apprenants/create') }}" class="btn btn-success btn-sm " title="Add New apprenant">
                                                <i class="fa fa-plus" aria-hidden="true"></i> Nouveau
                                            </a>
                                        @endrole
                                        @role('Resp-pedagogique')
                                            <a href="{{ url('/apprenants') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                                            <a href="{{ url('/apprenants/create') }}" class="btn btn-success btn-sm " title="Add New apprenant">
                                                <i class="fa fa-plus" aria-hidden="true"></i> Nouveau
                                            </a>
                                        @endrole
                                </div>
                                <div class="col-sm-4">
                                </div>
                                <div class="pull-right" style="margin-right:5px">

                                                <form method="GET" action="{{ url('/apprenants') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                                                    <div class="form-inline">
                                                        <input type="text" class="form-control" name="search" placeholder="Rechercher..." value="{{ request('search') }}">

                                                            <button class="btn btn-secondary" type="submit">
                                                            <i class="fa fa-search"></i>
                                                            </button>
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
                                                        <th>Référence</th>
                                                        <th>Nom</th>
                                                        <th>Prénom</th>
                                                        <th>Sexe </th>
                                                        <th>Tel</th>

                                                        <th>Filière</th>
                                                        <th>Promo</th>

                                                        <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                @foreach($apprenants as $item)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $item->reference }}</td>

                                                        <td>{{ $item->nom }}</td>
                                                        <td>{{ $item->prenom }}</td>
                                                        <td>{{ $item->sexe}}</td>
                                                        <td>{{ $item->tel}}</td>

                                                        <td>
                                                            @if ($item->filiere)
                                                            {{ $item->filiere->nom}}
                                                            @endif
                                                        </td>

                                                        <td>
                                                            @if ($item->promo)
                                                            {{ $item->promo->nom}}
                                                             @endif
                                                        </td>
                                                       {{-- <td>
                                                             <ul>
                                                                @foreach($item->stages as $stage)
                                                                <li>{{ $stage->titre }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </td>

                                                        {{-- <td>{{  $item->roles()->pluck('name')->implode(' ') }}</td> --}}

                                                        <td>
                                                            <a href="{{ url('/apprenants/' . $item->id) }}" title="Voir cet apprenant"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> </button></a>
                                                            <a href="{{ url('/apprenants/' . $item->id . '/edit') }}" title="Modifier cet apprenant"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </button></a>

                                                            <form method="POST" action="{{ url('/apprenants' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                                {{ method_field('DELETE') }}
                                                                {{ csrf_field() }}
                                                                <button type="submit" class="btn btn-danger btn-sm" title="Supprimer cet apprenant" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                            <div class="pagination-wrapper"> {!! $apprenants->appends(['search' => Request::get('search')])->render() !!} </div>
                                        </div>

                            </div>
                    </div>
            </div>
            </div>
        </div>
    </section>
</section>
@endsection
