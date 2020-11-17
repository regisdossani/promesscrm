@extends('layouts.app')
@include('inc.styles')
@section('content')
    <div class="container">
        <div class="row">
            @include('admins.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">LES PRÉSENCES</div>
                    <div class="card-body">
                        <a href="{{ url('/attendances/create') }}" class="btn btn-success btn-sm" title="Add New attendance">
                            <i class="fa fa-plus" aria-hidden="true"></i> Nouveau
                        </a>

                        <form method="GET" action="{{ url('/attendances') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>#</th><th>Classe</th>
                                        <th>Formateur</th>
                                        <th>Apprenant</th>
                                        <th>Date</th>
                                        <th>Statut</th>

                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($attendances as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->class->name }}</td>
                                        <td>{{ $item->formateur->nom }}</td>
                                        <td>{{ $item->apprenant->nom }}</td>
                                        <td>{{ $item->attendence_date }}</td>
                                        <td>{{ $item->attendence_status }}</td>

                                        <td>
                                            <a href="{{ url('/attendances/' . $item->id) }}" title="View attendance"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Voir</button></a>
                                            <a href="{{ url('/attendances/' . $item->id . '/edit') }}" title="Edit attendance"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>

                                            <form method="POST" action="{{ url('/attendances' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete attendance" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $attendances->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
