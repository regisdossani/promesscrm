@extends('layouts.app')
{{-- @include('inc.styles') --}}

@section('content')
    <div class="container">
        <div class="row">
            @include('admins.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">eqattendance {{ $eqattendance->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/eqattendances') }}" title="Retour"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Retour</button></a>
                        <a href="{{ url('/eqattendances/' . $eqattendance->id . '/edit') }}" title="Modifier"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>

                        <form method="POST" action="{{ url('eqattendances' . '/' . $eqattendance->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Supprimez" onclick="return confirm(&quot;Confirmez-vous la suppression?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $eqattendance->id }}</td>
                                    </tr>
                                    <tr><th>Jour </th><td> {{ $eqattendance->date }} </td></tr>
                                    <tr><th>De </th><td> {{ $eqattendance->time_from }} </td></tr>
                                    <tr><th>A </th><td> {{ $eqattendance->time_to}} </td></tr>
                                    <tr><th> Heures  </th><td> {{ $eqattendance->nbhours }} </td></tr>
                                    <tr><th> Mbre Equipe  </th><td> {{ $eqattendance->eq_id }} </td></tr>

                                    <tr><th> Commentaires </th><td> {{ $eqattendance->comments }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
