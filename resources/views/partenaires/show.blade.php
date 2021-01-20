@extends('inc.master')
@if (Auth::guard("admin")->check())
    @include('admins.sidebar')
@endif
@if (Auth::guard("equipe")->check())
    @include('equipes.sidebar')
@endif

@if (Auth::guard("apprenant")->check())
    @include('apprenants.sidebar')
@endif
@if (Auth::guard("formateur")->check())
    @include('formateurs.sidebar')
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
                                    AFFICHER UN PARTENAIRE
                                </div>
                            </header>
                            <div class="panel-body">
                                {{-- <div class="card-header">partenaire {{ $partenaire->id }}</div> --}}

                                <a href="{{ url('/partenaires') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                                <a href="{{ url('/partenaires/' . $partenaire->id . '/edit') }}" title="Edit partenaire"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>

                                <form method="POST" action="{{ url('partenaires' . '/' . $partenaire->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete partenaire" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
                                </form>
                                <br/>
                                <br/>

                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                            {{--                 <tr>
                                                <th>ID</th>
                                                <td>{{ $partenaire->id }}</td>
                                            </tr> --}}
                                            <tr><th> Raison social </th>
                                                <td> {{ $partenaire->raison_social }} </td>
                                            </tr>
                                                <tr><th> Type d'organisation </th>
                                                    <td> {{ $partenaire->type_organisation }} </td>
                                                </tr>
                                                    <tr><th> Nom du Référent </th>
                                                        <td> {{ $partenaire->nom_referent }} </td>
                                                    </tr>
                                                    <tr><th> Email</th>
                                                        <td> {{ $partenaire->email }} </td>
                                                    </tr>
                                                    <tr><th> Téléphone</th>
                                                        <td> {{ $partenaire->tel }} </td>
                                                    </tr>


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
