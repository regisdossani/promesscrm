@extends('inc.master')
@include('admins.sidebar')

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
                                GESTION DES PRÉSENCES DES FORMATEURS
                            </div>
                        </header>
                            {{-- <div class="card-header">Teacherattendances</div> --}}
                            <div class="panel-body">
                                <a href="{{ url('/teacherattendances/create') }}" class="btn btn-success btn-sm" title="Ajouter attendance">
                                    <i class="fa fa-plus" aria-hidden="true"></i> Nouveau
                                </a>

                                <form method="GET" action="{{ url('/teacherattendances') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Classe </th>
                                                <th>Formateur </th>
                                                <th>Date</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($attendances as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->class->name }}</td>
                                                <td>{{ $item->formateur->nom }}</td>
                                                <td>{{ $item->date }}</td>
                                                <td>{{ $item->attendence_status == 1 ? 'Présent(e)' : 'Absent(e)'}}</td>

                                                <td>
                                                    <a href="{{ url('/teacherattendances/' . $item->id) }}" title="Voir"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Voir</button></a>
                                                    <a href="{{ url('/teacherattendances/' . $item->id . '/edit') }}" title="Modifier"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>

                                                    <form method="POST" action="{{ url('/teacherattendances' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete teacherattendance" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Suppression</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="pagination-wrapper"> {!! $attendances->appends(['search' => Request::get('search')])->render() !!} </div>
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