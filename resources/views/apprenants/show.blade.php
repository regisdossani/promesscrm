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
                    <div class="col-lg-8">
                        <section  class="panel">
                        <header class="panel-heading">
                            <div class="panel-title">
                                AFFICHER UN APPRENANT
                            </div>
                        </header>
                        <div class="panel-body">

                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th>
                                                @if (Auth::guard("admin")->check())
                                                    <a href="{{ url('/apprenants') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                                                @endif


                                                @if (Auth::guard("apprenant")->check())
                                                    <a href="{{ url('/apprenant') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                                                @endif
                                                    @role('Resp-pedagogique')
                                                    <a href="{{ url('/apprenants') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                                                    @endrole

                                                <a href="{{ url('/apprenants/' . $apprenant->id . '/edit') }}" title="Modifier cet apprenant"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>




                                                    <form method="POST" action="{{ url('/apprenants' . '/' . $apprenant->id) }}" accept-charset="UTF-8" style="display:inline">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        @if (Auth::guard("admin")->check())
                                                        <button type="submit" class="btn btn-danger btn-sm" title="Supprimer cet apprenant" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
                                                        @endif
                                                    </form>
                                            </th>


                                        </tr>

                                    </tbody>
                            </table>
                        </div>


                            <br/>
                            <br/>

                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th>Référence</th>
                                            <td>{{ $apprenant->reference }}</td>
                                        </tr>
                                        <tr>
                                            <th>Nom</th>
                                            <td>{{ $apprenant->nom }}</td>
                                        </tr>
                                        <tr>
                                            <th> Prenom </th>
                                            <td> {{ $apprenant->prenom }}
                                            </td>
                                        <tr>
                                        <tr>
                                                <th> Sexe </th>
                                                <td> {{ $apprenant->sexe }} </td>
                                        </tr>
                                        <tr>
                                            <th> Tél </th>
                                            <td> {{ $apprenant->tel }} </td>
                                        </tr>

                                        <tr>
                                            <th> Filière </th>
                                            <td> {{ $apprenant->filiere->nom }} </td>
                                        </tr>
                                        <tr>
                                            <th> Promo </th>
                                            <td> {{ $apprenant->promo->nom }} </td>
                                        </tr>
                                        <tr>
                                            <th> Date de naissance </th>
                                            <td> {{ $apprenant->date_naiss }} </td>
                                        </tr>
                                        <tr>
                                            <th> Lieu de naissance </th>
                                            <td> {{ $apprenant->lieu_naiss }} </td>
                                        </tr>
                                        <tr>
                                            <th> Email </th>
                                            <td> {{ $apprenant->email }} </td>
                                        </tr>
                                        <tr>
                                            <th> Visite de terrain </th>
                                            <td> {{ $apprenant->visite_terain }} </td>
                                        </tr>
                                        <tr>
                                            <th> Année</th>
                                            <td> {{ $apprenant->annee }} </td>
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
