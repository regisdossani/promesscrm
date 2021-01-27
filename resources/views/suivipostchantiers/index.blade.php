@extends('layouts.app')
{{-- @include('inc.styles') --}}
@section('content')
    <div class="container">
        <div class="row">
            @include('admins.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Suivi Post-chantiers</div>
                    <div class="card-body">
                        <a href="{{ url('/suivipostchantiers/create') }}" class="btn btn-success btn-sm" title="Add New suivipostchantier">
                            <i class="fa fa-plus" aria-hidden="true"></i> Ajouter
                        </a>
                        <div class="pull-right" style="margin-right:5px">

                        <form method="GET" action="{{ url('/suivipostchantiers') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
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
                                        <th>#</th><th>Chantier Id</th><th>Évaluation</th><th>Maintenance</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($suivipostchantiers as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->chantier_id }}</td><td>{{ $item->evaluation }}</td><td>{{ $item->maintenance }}</td>
                                        <td>
                                            <a href="{{ url('/suivipostchantiers/' . $item->id) }}" title="Voir suivi post-chantier"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Voir</button></a>
                                            <a href="{{ url('/suivipostchantiers/' . $item->id . '/edit') }}" title="Modifier suivi post-chantier"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>

                                            <form method="POST" action="{{ url('/suivipostchantiers' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Supprimer " onclick="return confirm(&quot;Confirmez-vous la suppression?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Suppprimer</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $suivipostchantiers->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
