@extends('layouts.app')
@include('inc.styles')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">testcandidat {{ $testcandidat->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/testcandidats') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/testcandidats/' . $testcandidat->id . '/edit') }}" title="Edit testcandidat"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('testcandidats' . '/' . $testcandidat->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete testcandidat" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $testcandidat->id }}</td>
                                    </tr>
                                    <tr><th> Candidat Id </th><td> {{ $testcandidat->candidat_id }} </td></tr><tr><th> Test Ecrit </th><td> {{ $testcandidat->test_ecrit }} </td></tr><tr><th> Entretien </th><td> {{ $testcandidat->entretien }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
