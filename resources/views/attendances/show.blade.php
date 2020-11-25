@extends('layouts.app')
@include('inc.styles')
@include('admins.sidebar')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
            </div>

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">PRÉSENCE N° {{ $attendance->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/attendances') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/attendances/' . $attendance->id . '/edit') }}" title="Edit attendance"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('attendances' . '/' . $attendance->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete attendance" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $attendance->id }}</td>
                                    </tr>
                                    <tr><th> Classe </th>
                                        <td> {{ $attendance->class->name }} </td>
                                    </tr><tr><th> Formateur </th>
                                        <td> {{ $attendance->formateur->nom }} </td>
                                    </tr><tr><th> Apprenant</th>
                                        <td> {{ $attendance->apprenant->nom }} </td>
                                    </tr>
                                </tr><tr><th> Date</th>
                                    <td> {{ $attendance->attendence_date }} </td>
                                </tr>
                            </tr><tr><th> Statut</th>
                                <td> {{ $attendance->attendence_status }} </td>
                            </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
