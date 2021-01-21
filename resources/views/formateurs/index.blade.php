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
                    {{-- @include('admins.sidebar') --}}

                    <div class="col-md-12">

                        <section  class="panel">

                            <header class="panel-heading">
                                <div class="panel-title">
                                    GESTION DES FORMATEURS
                                </div>

                            </header>

                            <div class="panel-body">
                                @role('superadmin')
                                    <a href="{{ url('/admin') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                                    <a href="{{ url('/formateurs/create') }}" class="btn btn-success btn-sm" title="Ajouter un formateur">
                                        <i class="fa fa-plus" aria-hidden="true"></i> Nouveau
                                    </a>
                                @endrole
                                {{-- @role('Resp-pedagogique')
                                    <a href="{{ url('/formateurs') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                                @endrole --}}

                                <div class="pull-right" style="margin-right:5px">

                                    <form method="GET" action="{{ url('/formateurs') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                <br/> <br/>

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Prénom</th>
                                                <th>Nom</th>
                                                <th>Référence</th>
                                                <th>Sexe</th>
                                                <th>Tél</th>
                                                <th>Email</th>
                                                <th>Fonction</th>
                                                 <th>Module</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($formateurs as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->prenom }}</td>
                                                <td>{{ $item->nom }}</td>
                                                <td>{{ $item->reference }}</td>
                                                <td>{{ $item->sexe }}</td>
                                                <td>{{ $item->tel }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->fonction }}</td>

                                                <td>
                                                    @foreach($item->modules as $module)
                                                        {{ $module->nom}}
                                                    @endforeach
                                                </td>
                                                <td>
                                                    <a href="{{ url('/formateurs/' . $item->id) }}" title="Voir formateur"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> </button></a>
                                                    <a href="{{ url('/formateurs/' . $item->id . '/edit') }}" title="Modifier formateur"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>

                                                    <form method="POST" action="{{ url('/formateurs' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-danger btn-sm" title="Supprimer formateur" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="pagination-wrapper"> {!! $formateurs->appends(['search' => Request::get('search')])->render() !!} </div>
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
