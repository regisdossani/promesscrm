@extends('inc.master')
@include('inc.header')

@section('content')
<section class="wrapper">
    <div class="form-w3layouts">

        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <section  class="panel">
                        <header class="panel-heading">
                            <div class="panel-title">
                                GESTION DES FORMATIONS
                            </div>
                        </header>
                        <div class="panel-body">
                            <a href="{{ url('/admin') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>

                                <a href="{{ url('/formations/create') }}" class="btn btn-success btn-sm" title="Ajouter une formation">
                                    <i class="fa fa-plus" aria-hidden="true"></i> Ajouter
                                </a>

                                <div class="panel-body">
                                    <div class="row">

                                        <form method="GET" action="{{ url('/formations') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="search" placeholder="Rechercher..." value="{{ request('search') }}">
                                                <span class="input-group-append">
                                                    <button class="btn btn-secondary" type="submit">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </form>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th><th>Nom</th><th>Type</th><th>Annee</th><th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($formations as $item)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $item->nom }}</td><td>{{ $item->type }}</td><td>{{ $item->annee }}</td>
                                                        <td>
                                                            <a href="{{ url('/formations/' . $item->id) }}" title="Voir formation"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Voir</button></a>
                                                            <a href="{{ url('/formations/' . $item->id . '/edit') }}" title="Modifier formation"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>

                                                            <form method="POST" action="{{ url('/formations' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                                {{ method_field('DELETE') }}
                                                                {{ csrf_field() }}
                                                                <button type="submit" class="btn btn-danger btn-sm" title="Supprimer formation" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                            <div class="pagination-wrapper"> {!! $formations->appends(['search' => Request::get('search')])->render() !!} </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
