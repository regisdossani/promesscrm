@extends('layouts.app')
{{-- @include('inc.styles') --}}

@section('content')
    <div class="container">
        <div class="row">
            @include('admins.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">permission {{ $permission->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/permissions') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                        <a href="{{ url('/admin/permissions/' . $permission->id . '/edit') }}" title="Edit permission"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>

                        <form method="POST" action="{{ url('admin/permissions' . '/' . $permission->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete permission" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $permission->id }}</td>
                                    </tr>
                                    <tr><th> Nom </th><td> {{ $permission->name }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
