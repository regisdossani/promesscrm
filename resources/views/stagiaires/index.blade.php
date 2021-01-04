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
                        <section class="panel">
                            <header class="panel-heading">
                                <div class="panel-title">
                                    GESTION DES STAGIAIRES
                                </div>
                            </header>
                                {{-- <div class="card-header">Stagiaires</div> --}}
                                <div class="panel-body">
                                    <a href="{{ url('/stagiaires/create') }}" class="btn btn-success btn-sm" title="Add New stagiaire">
                                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                                    </a>

                                    <form method="GET" action="{{ url('/stagiaires') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                                    <th>#</th><th>Stage Id</th><th>Apprenant Id</th><th>Moyenne</th><th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($stagiaires as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->stage_id }}</td><td>{{ $item->apprenant_id }}</td><td>{{ $item->moyenne }}</td>
                                                    <td>
                                                        <a href="{{ url('/stagiaires/' . $item->id) }}" title="View stagiaire"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                                        <a href="{{ url('/stagiaires/' . $item->id . '/edit') }}" title="Edit stagiaire"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                                        <form method="POST" action="{{ url('/stagiaires' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                            {{ method_field('DELETE') }}
                                                            {{ csrf_field() }}
                                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete stagiaire" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        <div class="pagination-wrapper"> {!! $stagiaires->appends(['search' => Request::get('search')])->render() !!} </div>
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
