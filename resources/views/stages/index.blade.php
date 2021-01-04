@extends('inc.master')
@role('equipe')
@include('equipes.sidebar')
@endrole
@role('apprenant')
@include('apprenants.sidebar')
@endrole
@role('formateur')
@include('formateurs.sidebar')
@endrole
@role('superadmin')
@include('admins.sidebar')
@endrole
@section('content')
<section id="main-content">

<section class="wrapper">
    <div class="form-w3layouts">

        <div class="container">
            <div class="row">

                <div class="col-md-10">
                    <section  class="panel">
                        <header class="panel-heading">
                            <div class="panel-title">
                                GESTION DES STAGES
                            </div>
                        </header>
                        <div class="panel-body">

                                <a href="{{ url('/stages/create') }}" class="btn btn-success btn-sm" title="Add New stage">
                                    <i class="fa fa-plus" aria-hidden="true"></i> Nouveau
                                </a>

                                <form method="GET" action="{{ url('/stages') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="search" placeholder="Rechercher..." value="{{ request('search') }}">
                                        <span class="input-group-append">
                                            <button class="btn btn-secondary" type="submit">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>

                                <br/>
                                <br/>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th><th>Titre</th><th>Stage Entreprise</th><th>Nom Professionel </th><th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($stages as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->titre }}</td>
                                                <td>{{ $item->stage_entreprise }}</td>
                                                @foreach($profs as $prof)
                                                <td  {{ isset($item->professionnel_id) && $item->professionnel_id == $prof->id ? 'selected' : ''}}>{{ $prof->nom}}</td>
                                            @endforeach
                                                <td>
                                                    <a href="{{ url('/stages/' . $item->id) }}" title="Voir ce stage"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Voir</button></a>
                                                    <a href="{{ url('/stages/' . $item->id . '/edit') }}" title="Modifier ce stage"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>

                                                    <form method="POST" action="{{ url('/stages' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-danger btn-sm" title="Supprimer ce stage" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="pagination-wrapper"> {!! $stages->appends(['search' => Request::get('search')])->render() !!} </div>
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
