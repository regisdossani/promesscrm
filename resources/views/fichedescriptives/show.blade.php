@extends('layouts.app')
{{-- @include('inc.styles') --}}

@section('content')
    <div class="container">
        <div class="row">
            @include('admins.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">fichedescriptive {{ $fichedescriptive->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/fiches') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/fiches/' . $fichedescriptive->id . '/edit') }}" title="Edit fichedescriptive"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('fiches' . '/' . $fichedescriptive->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete fichedescriptive" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $fichedescriptive->id }}</td>
                                    </tr>
                                    <tr><th> Context </th><td> {{ $fichedescriptive->context }} </td></tr><tr><th> Besoins </th><td> {{ $fichedescriptive->besoins }} </td></tr><tr><th> Dimensionnement </th><td> {{ $fichedescriptive->dimensionnement }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
