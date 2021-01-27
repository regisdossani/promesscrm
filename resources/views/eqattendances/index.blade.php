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
                                    SUIVI HORAIRE DES MEMBRE DE PROMESS
                                </div>
                            </header>
                            <div class="panel-body">
                                    {{--  <div class="card-header">Suivis horaire des Employés</div>
                                        <div class="card-body"> --}}
                                <a href="{{ url('/eqattendance/create') }}" class="btn btn-success btn-sm" title="Ajout">
                                    <i class="fa fa-plus" aria-hidden="true"></i> Ajouter
                                </a>
                                <div class="pull-right" style="margin-right:5px">

                                    <form method="GET" action="{{ url('/eqattendance') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nom</th>
                                                <th>Date</th>
                                                <th>De</th>
                                                <th>A</th>
                                                {{-- <th>Heures</th> --}}
                                                <th>Statut</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($eqattendances as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>

                                                @foreach($equipes as $eq)
                                                    @if( $item->employee_id == $eq->id)
                                                        <td>{{$eq->nom }}</td>
                                                    @endif
                                                @endforeach
                                                <td>{{ $item->attendance_date }}</td>
                                                <td>{{ $item->in_time }}</td>
                                                <td>{{ $item->out_time }}</td>
                                                <td>{{ $item->status }}</td>

                                                <td>
                                                    <a href="{{ url('/eqattendance/' . $item->id) }}" title="Voir"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Voir</button></a>
                                                    <a href="{{ url('/eqattendance/' . $item->id . '/edit') }}" title="Modifier"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>

                                                    <form method="POST" action="{{ url('/eqattendance' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-danger btn-sm" title="Supprimer" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="pagination-wrapper"> {!! $eqattendances->appends(['search' => Request::get('search')])->render() !!} </div>
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
