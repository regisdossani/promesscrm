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
                                <a href="{{ url('/encadreurs/create') }}" class="btn btn-success btn-sm" title="Nouvel encadreur">
                                    <i class="fa fa-plus" aria-hidden="true"></i> Nouveau
                                </a>

                                <form method="GET" action="{{ url('/encadreurs') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                                <th>#</th><th>Professionel Id</th><th>Formateur Id</th><th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($encadreurs as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->professionel_id }}</td><td>{{ $item->formateur_id }}</td>
                                                <td>
                                                    <a href="{{ url('/encadreurs/' . $item->id) }}" title="View encadreur"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                                    <a href="{{ url('/encadreurs/' . $item->id . '/edit') }}" title="Edit encadreur"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                                    <form method="POST" action="{{ url('/encadreurs' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete encadreur" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
