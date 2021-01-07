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
                                   AFFICHER LE SUIVI HORAIRE D'UN' MEMBRE DE PROMESS
                                </div>
                            </header>
                            <div class="panel-body">
                                {{-- <div class="card-header">eqattendance {{ $eqattendance->id }}</div> --}}

                                <a href="{{ url('/eqattendance') }}" title="Retour"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Retour</button></a>
                                <a href="{{ url('/eqattendance/' . $eqattendance->id . '/edit') }}" title="Modifier"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>

                                <form method="POST" action="{{ url('eqattendance' . '/' . $eqattendance->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Supprimez" onclick="return confirm(&quot;Confirmez-vous la suppression?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
                                </form>
                                <br />
                                <br />

                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th>ID</th>
                                                <td>{{ $eqattendance->id }}</td>
                                            </tr>
                                            <tr>
                                                <th>Jour </th>
                                                <td> {{ $eqattendance->attendance_date }} </td>
                                            </tr>
                                            <tr>
                                                <th>De </th>
                                                <td> {{ $eqattendance->in_time }} </td>
                                            </tr>
                                            <tr>
                                                <th>A </th>
                                                <td> {{ $eqattendance->out_time}} </td>
                                            </tr>
                                            <tr>
                                                <th> Heures </th>
                                                <td> {{ $eqattendance->working_hour }} </td>
                                            </tr>
                                            <tr>
                                                <th> Mbre Equipe </th>
                                                @foreach($equipes as $eq)
                                                @if( $eqattendance->employee_id == $eq->id)
                                                <td>{{$eq->nom }}</td>
                                                @endif
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <th> Statut </th>
                                                <td> {{ $eqattendance->status }} </td>
                                            </tr>
                                        </tbody>
                                    </table>
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
