@extends('inc.master')

@role('superadmin')
@include('admins.sidebar')
@endrole

@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="form-w3layouts">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <section  class="panel">
                            <header class="panel-heading">
                                <div class="panel-title">
                                    GESTION DES ENCADREURS
                                </div>
                            </header>

                            {{-- <div class="card-header">Encadreurs</div> --}}
                            <div class="card-body">
                                <br/>
                                <a href="{{ url('/encadreurs/create') }}" class="btn btn-success btn-sm" title="Nouvel encadreur">
                                    <i class="fa fa-plus" aria-hidden="true"></i> Nouveau
                                </a>
                                <div class="pull-right" style="margin-right:5px">

                                    <form method="GET" action="{{ url('/encadreurs') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                                <th>Noms</th>
                                                <th>Formateur</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($encadreurs as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->noms }}</td>
                                                <td>@if ($item->formateur)
                                                    {{ $item->formateur->nom }}
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ url('/encadreurs/' . $item->id) }}" title="Voir cet encadreur"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                                    <a href="{{ url('/encadreurs/' . $item->id . '/edit') }}" title="Modifier cet encadreur"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </button></a>

                                                    <form method="POST" action="{{ url('/encadreurs' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-danger btn-sm" title="Supprimer cet encadreur" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="pagination-wrapper"> {!! $encadreurs->appends(['search' => Request::get('search')])->render() !!} </div>
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
