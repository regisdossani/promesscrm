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
                <section  class="panel">

                        <header class="panel-heading">
                            <div class="panel-title">
                                CHANTIERS ÉCOLE
                        </header>
                            {{-- <div class="card-header">Chantiers</div> --}}
                            <div class="card-body">
                                <a href="{{ url('/chantiers/create') }}" class="btn btn-success btn-sm" title="Add New chantier">
                                    <i class="fa fa-plus" aria-hidden="true"></i> Add New
                                </a>

                                <form method="GET" action="{{ url('/chantiers') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                                <th>#</th>
                                                <th>Titre Chantier</th>
                                                <th>Référence</th>
                                                <th>Date </th>
                                                <th>Durée(J) </th>
                                                <th>Durée(h)</th>
                                                <th>Maitre d'Oeuvre</th>
                                                <th>Formateur</th>
                                                <th>Descriptif</th>


                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($chantiers as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->titre }}</td>
                                                <td>{{ $item->reference }}</td>
                                                <td>{{ $item->date }}</td>
                                                <td>{{ $item->date }}</td>
                                                <td>{{ $item->duree_j }}</td>
                                                <td>{{ $item->duree_h }}</td>
                                                <td>{{ $item->maitre_oeuvre }}</td>
                                                <td>{{ $item->formateur }}</td>
                                                <td>{{ $item->descriptif }}</td>

                                                <td>
                                                    <a href="{{ url('/chantiers/' . $item->id) }}" title="View chantier"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                                    <a href="{{ url('/chantiers/' . $item->id . '/edit') }}" title="Edit chantier"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                                    <form method="POST" action="{{ url('/chantiers' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete chantier" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="pagination-wrapper"> {!! $chantiers->appends(['search' => Request::get('search')])->render() !!} </div>
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
