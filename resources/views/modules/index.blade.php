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
    <div class="table-agile-info">

        <div class="panel panel-default">
                            <header class="card-heading">
                                    GESTION DES MODULES
                            </header>
                                <div class="card-body ">
                                    <br/>

                                        <a href="{{ url('/modules/create') }}" class="btn btn-success btn-sm" title="Nouveau module">
                                            <i class="fa fa-plus" aria-hidden="true"></i> Nouveau
                                        </a>
                                        <div class="pull-right" style="margin-right:5px">
                                            <form method="GET" action="{{ url('/modules') }}" accept-charset="UTF-8"  role="search" class="form-inline">
                                                <div class="form-group">
                                                    <input type="text" class="form-group" name="search" placeholder="Rechercher..." value="{{ request('search') }}">
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
                                    <div class="row">
                                        <div class="table-responsive">
                                            <table class="table table-striped b-t b-light">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Nom</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($modules as $item)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $item->nom }}</td>
                                                        <td>
                                                            <a href="{{ url('/modules/' . $item->id) }}" title="Voir ce module"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                                            <a href="{{ url('/modules/' . $item->id . '/edit') }}" title="Editer ce module"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>

                                                            <form method="POST" action="{{ url('/modules' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                                {{ method_field('DELETE') }}
                                                                {{ csrf_field() }}
                                                                <button type="submit" class="btn btn-danger btn-sm" title="Supprimer ce module" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                            <div class="pagination-wrapper"> {!! $modules->appends(['search' => Request::get('search')])->render() !!} </div>
                                        </div>
                                    </div>
                                </div>

                </div>
            </div>

</section>
</section>
@endsection
