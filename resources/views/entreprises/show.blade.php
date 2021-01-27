@extends('layouts.app')
@include('inc.styles')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">entreprise {{ $entreprise->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/entreprises') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/entreprises/' . $entreprise->id . '/edit') }}" title="Edit entreprise"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('entreprises' . '/' . $entreprise->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete entreprise" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $entreprise->id }}</td>
                                    </tr>
                                    <tr><th> Raison Sociale </th><td> {{ $entreprise->raison_sociale }} </td></tr><tr><th> Reference </th><td> {{ $entreprise->reference }} </td></tr><tr><th> Activite Entreprise </th><td> {{ $entreprise->activite_entreprise }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
