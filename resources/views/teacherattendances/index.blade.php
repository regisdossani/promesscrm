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
                        <header class="panel-heading">
                                GESTION DES PRÉSENCES DES FORMATEURS

                        </header>
                            {{-- <div class="card-header">Teacherattendances</div> --}}
                            <div class="panel-body">
                                <a href="{{ url('/teacherattendances/create') }}" class="btn btn-success btn-sm" title="Ajouter attendance">
                                    <i class="fa fa-plus" aria-hidden="true"></i> Nouveau
                                </a>
                                <div class="pull-right" style="margin-right:5px">

                                    <form method="GET" action="{{ url('/teacherattendances') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                    <div class="table-responsive">
                                        <table class="table table-striped b-t b-light">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Classe </th>
                                                    <th>Formateur </th>
                                                    <th>Date</th>
                                                    <th>Statut</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($attendances as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>
                                                        @if ($item->classe )
                                                        {{ $item->classe->name }}
                                                        @endif
                                                    </td>

                                                    <td>
                                                        @if ($item->formateur  )
                                                        {{ $item->formateur->nom  }}
                                                    @endif
                                                    </td>

                                                    <td>{{ $item->date }}</td>
                                                    <td>{{ $item->attendence_status == 1 ? 'Présent(e)' : 'Absent(e)'}}</td>

                                                    <td>
                                                        <a href="{{ url('/teacherattendances/' . $item->id) }}" title="Voir"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                                        <a href="{{ url('/teacherattendances/' . $item->id . '/edit') }}" title="Modifier"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </button></a>

                                                        <form method="POST" action="{{ url('/teacherattendances' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                            {{ method_field('DELETE') }}
                                                            {{ csrf_field() }}
                                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete teacherattendance" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
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
</section>
</section>
@endsection
