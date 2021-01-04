@extends('inc.master')
@role('apprenant')
@include('apprenants.sidebar')
@endrole
@role('superadmin')
@include('admins.sidebar')
@endrole
@role('Resp-Pedagogique')
@include('equipes.sidebar')
@endrole


@section('content')
<section id="main-content">

    <section class="wrapper">

        <div class="form-w3layouts">
            <div class="container">
                <div class="row">
            <div class="col-md-12">
                <section  class="card">
                    <header class="panel-heading">
                        <div class="panel-title">
                            GESTION DES CANDIDATS
                        </div>
                    </header>

                    <div class="panel-body">
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
                        <br/>
                        <br/>

                        <div class="position-center">
                            <div class="row">

                                <form method="GET" action="{{ url('/candidats') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                                    <div class="form-inline">
                                        <input type="text" class="form-control" name="search" placeholder="Rechercher..." value="{{ request('search') }}">

                                            <button class="btn btn-secondary" type="submit">
                                                <i class="fa fa-search"></i></button>
                                    </div>
                                </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Civilité</th>
                                        <th>Prénom</th>
                                        <th>Nom</th>
                                        <th>Photo</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($candidats as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->civilite }}</td>
                                        <td>{{ $item->prenom }}</td>
                                        <td>{{ $item->nom }}</td>
                                        <td><img alt="avatar" src={{url('uploads/candidats/'.$item->avatar) }}  width="50" height="50"></td>
                                        <td>
                                            <a href="{{ url('/candidats/' . $item->id) }}" title="Voir ce candidat"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Voir</button></a>
                                            <a href="{{ url('/candidats/' . $item->id . '/edit') }}" title="Modifier ce candidat"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>

                                            <form method="POST" action="{{ url('/candidats' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Supprimer ce candidat" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
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
                </section>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
</section>
@endsection
