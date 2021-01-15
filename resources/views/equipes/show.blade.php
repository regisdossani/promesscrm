@extends('inc.master')
@role('apprenant')
@include('equipes.sidebar')
@endrole
@role('superadmin')
@include('admins.sidebar')
@endrole

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
                                    AFFICHER UN MEMBRE PERSONNEL
                                </div>
                            </header>

                    <div class="card-body">
                        @if (Auth::guard("equipe")->check())
                        <a href="{{ url('/equipe') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                        @endif
                        @if (Auth::guard("admin")->check())
                        <a href="{{ url('/equipes') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                        @endif


                        <a href="{{ url('/equipes/' . $equipe->id . '/edit') }}" title="Modifier le membre"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>

                        <form method="POST" action="{{ url('/equipes' . '/' . $equipe->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            @if (Auth::guard("admin")->check())
                            <button type="submit" class="btn btn-danger btn-sm" title="Supprimer le membre" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
                            @endif
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>

                                    <tr>
                                        <th> Nom & Prénom</th>
                                        <td> {{ $equipe->nom_prenom }} </td>
                                    </tr>
                                    <tr>
                                        <th> Référencd </th>
                                        <td> {{ $equipe->reference }} </td>
                                    </tr>
                                    <tr>
                                        <th> Téléphone </th>
                                        <td> {{ $equipe->tel }} </td>
                                    </tr>
                                    <tr>
                                        <th>Email</th><td>{{ $equipe->email }}</td>
                                    </tr>
                                    <tr>
                                        <th> Photo </th>
                                        <td><img alt="photo" src={{url('uploads/equipe/'.$equipe->photo) }}  width="50" height="50"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    </section>
</section>
@endsection
