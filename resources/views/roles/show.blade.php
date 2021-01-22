@extends('inc.master')
@if (Auth::guard("admin")->check())
    @include('admins.sidebar')
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
                                    MODIFIER UN RÔLE
                                </div>
                            </header>
                    <div class="card-body">

                        <a href="{{ url('/admin/roles') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                        <a href="{{ url('/admin/roles/' . $role->id . '/edit') }}" title="Edit role"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>

                        <form method="POST" action="{{ url('admin/roles' . '/' . $role->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete role" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $role->id }}</td>
                                    </tr>
                                    <tr><th> Nom du rôle </th><td> {{ $role->name }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
