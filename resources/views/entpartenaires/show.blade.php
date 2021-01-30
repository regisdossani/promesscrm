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
                <div class="col-md-8">
                    <section  class="panel">

                        <header class="panel-heading">
                            <div class="panel-title">
                             AFFICHER UNE ENTREPRISE PARTENAIRE
                        </header>
                        <div class="card-body">

                            <a href="{{ url('/entpartenaires') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                            <a href="{{ url('/entpartenaires/' . $entpartenaire->id . '/edit') }}" title="Modifier cette entreprise"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>

                            <form method="POST" action="{{ url('entpartenaires' . '/' . $entpartenaire->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete entreprise" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
                            </form>
                            <br/>
                            <br/>

                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                       {{--  <tr>
                                            <th>ID</th>
                                            <td>{{ $entreprise->id }}</td>
                                        </tr> --}}
                                        <tr><th> Raison Sociale </th>
                                            <td> {{ $entpartenaire->raison_sociale }} </td>
                                        </tr>
                                        <tr><th> Reference </th>
                                            <td> {{ $entpartenaire->reference }} </td>
                                        </tr>
                                            <tr>
                                                <th> Activite Entreprise </th>
                                                        <td> {{ $entpartenaire->activite_entreprise }} </td>
                                            </tr>

                                            <tr>
                                                <th>  Responsable </th>
                                                <td> {{ $entpartenaire->responsable }} </td>
                                            </tr>

                                        <tr>
                                            <th> Téléphone </th>
                                            <td> {{ $entpartenaire->contact_tel }} </td>
                                        </tr>

                                    <tr><th>  Email </th>
                                    <td> {{ $entpartenaire->contact_email }} </td>
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
