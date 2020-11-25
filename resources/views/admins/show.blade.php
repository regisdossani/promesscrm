@extends('layouts.app')
@include('inc.styles')

@section('content')
    <div class="container">
        <div class="row">
            @include('admins.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">admin {{ $admin->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admins') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admins/' . $admin->id . '/edit') }}" title="Edit admin"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admins' . '/' . $admin->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete admin" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $admin->id }}</td>
                                    </tr>
                                    <tr><th> Username </th><td> {{ $admin->username }} </td></tr><tr><th> Email </th><td> {{ $admin->email }} </td></tr><tr><th> Password </th><td> {{ $admin->password }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
