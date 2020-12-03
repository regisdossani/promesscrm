@extends('inc.master')
@include('admins.sidebar')

@section('content')
<section id="main-content">

    <section class="wrapper">
        <div class="form-w3layouts">

            <div class="container">
                <div class="row">

                    <div class="col-md-9">
                <section  class="panel">
                    <header class="panel-heading">
                        <div class="panel-title">
                            AFFICHER UNE FORMATION
                        </div>
                    </header>
                                {{-- <div class="card-header">formation {{ $formation->id }}</div> --}}
                                <div class="panel-body">

                                        <a href="{{ url('/formations') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                                        <a href="{{ url('/formations/' . $formation->id . '/edit') }}" title="Modifier formation"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>

                                            <form method="POST" action="{{ url('/formations' . '/' . $formation->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Supprimer cette formation" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
                                            </form>
                                            <br/>
                                            <br/>

                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <th>ID</th><td>{{ $formation->id }}</td>
                                                            </tr>
                                                            <tr><th> Nom </th><td> {{ $formation->nom }} </td></tr><tr><th> Type </th><td> {{ $formation->type }} </td></tr><tr><th> Annee </th><td> {{ $formation->annee }} </td></tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                    </section>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection
