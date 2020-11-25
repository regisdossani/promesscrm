@extends('layouts.app')
{{-- @include('inc.styles') --}}

@section('content')
    <div class="container">
        <div class="row">
            @include('admins.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">suivipostchantier {{ $suivipostchantier->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/suivipostchantiers') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Retour</button></a>
                        <a href="{{ url('/suivipostchantiers/' . $suivipostchantier->id . '/edit') }}" title="Edit suivipostchantier"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>

                        <form method="POST" action="{{ url('suivipostchantiers' . '/' . $suivipostchantier->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete suivipostchantier" onclick="return confirm(&quot;Confirmez-vous la suppression?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $suivipostchantier->id }}</td>
                                    </tr>
                                    <tr><th> Chantier Id </th><td> {{ $suivipostchantier->chantier_id }} </td></tr><tr><th> Evaluation </th><td> {{ $suivipostchantier->evaluation }} </td></tr><tr><th> Maintenance </th><td> {{ $suivipostchantier->maintenance }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
