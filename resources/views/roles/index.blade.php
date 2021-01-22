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
                    <div class="col-md-8">
                        <section  class="panel">
                            <header class="panel-heading">
                                <div class="panel-title">
                                    GESTION DES RÔLES
                                </div>
                            </header>
                    <div class="card-body">
                        <br/>
                        <a href="{{ url('/admin/roles/create') }}" class="btn btn-success btn-sm" title="Add New role">
                            <i class="fa fa-plus" aria-hidden="true"></i> Nouveau
                        </a>
                        <div class="pull-right" style="margin-right:5px">

                            <form method="GET" action="{{ url('/admin/roles') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>Noms des rôles</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($roles as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>
                                            <a href="{{ url('/admin/roles/' . $item->id) }}" title="Voir le rôle"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> </button></a>
                                            <a href="{{ url('/admin/roles/' . $item->id . '/edit') }}" title="Modifier le rôle"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>

                                            <form method="POST" action="{{ url('/admin/roles' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Supprimer ce rôle" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $roles->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
