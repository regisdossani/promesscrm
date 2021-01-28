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

                   {{--  <div class="col-md-3">
                    </div> --}}
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-header">Classe</div>
                            <div class="card-body">
                                <a href="{{ url('/classe/create') }}" class="btn btn-success btn-sm" title="Add New classe">
                                    <i class="fa fa-plus" aria-hidden="true"></i> Nouveau
                                </a>
                                <div class="pull-right" style="margin-right:5px">

                                    <form method="GET" action="{{ url('/classe') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                    <br />
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nom</th>
                                                    <th>Filière</th>
                                                    <th>Description</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($classes as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->name }}</td>
                                                    {{-- <td>{{ $item->class_numeric }}</td> --}}

                                                    <td>{{ $item->filiere->nom }}</td>
                                                    <td>{{ $item->class_description }}</td>

                                                    <td>
                                                        <a href="{{ url('/classe/' . $item->id) }}" title="View classe">
                                                            <button class="btn btn-info btn-sm">
                                                                <i class="fa fa-eye" aria-hidden="true"></i> Voir
                                                            </button>
                                                        </a>
                                                        <a href="{{ url('/classe/' . $item->id . '/edit') }}" title="Edit classe">
                                                            <button class="btn btn-primary btn-sm">
                                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier
                                                            </button>
                                                        </a>

                                                        <form method="POST" action="{{ url('/classe' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                            {{ method_field('DELETE') }}
                                                            {{ csrf_field() }}
                                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete classe" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <div class="pagination-wrapper"> {!! $classes->appends(['search' => Request::get('search')])->render() !!} </div>
                                    </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
@endsection
