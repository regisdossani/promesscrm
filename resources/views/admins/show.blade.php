@extends('inc.master')
@include('admins.sidebar')


@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="form-w3layouts">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <section  class="panel">
                            <header class="panel-heading">
                                <div class="panel-title">
                                    AFFICHER UN ADMIN
                                </div>
                            </header>
                            <div class="panel-body">

                                    <a href="{{ url('/admins') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                                    <a href="{{ url('/admins/' . $admin->id . '/edit') }}" title="Modifier admin"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>

                                    <form method="POST" action="{{ url('admins' . '/' . $admin->id) }}" accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Supprimer admin" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
                                    </form>
                                    <br/>
                                    <br/>

                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th>ID</th><td>{{ $admin->id }}</td>
                                                </tr>
                                                <tr><th> Nom utilisateur </th><td> {{ $admin->username }} </td></tr>
                                                <tr><th> Email </th><td> {{ $admin->email }} </td></tr>
                                                <tr><th> Password </th><td> {{ $admin->password }} </td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
@endsection
