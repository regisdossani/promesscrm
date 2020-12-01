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
                <div class="card-header">classe {{ $classe->id }}</div>
                <div class="card-body">

                    <a href="{{ url('/classe') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                    <a href="{{ url('/classe/' . $classe->id . '/edit') }}" title="Edit classe"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                    <form method="POST" action="{{ url('classe' . '/' . $classe->id) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm" title="Delete classe" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                    </form>
                    <br />
                    <br />

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $classe->id }}</td>
                                </tr>
                                <tr>
                                    <th> Name </th>
                                    <td> {{ $classe->name }} </td>
                                </tr>
                                <tr>
                                    <th> Class Numeric </th>
                                    <td> {{ $classe->class_numeric }} </td>
                                </tr>
                                <tr>
                                    <th> Formation </th>
                                    <td> {{ $classe->formation->nom }} </td>
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