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




                                                    <form method="POST" action="{{ url('/admin/apprenants' . '/' . $apprenant->id) }}" accept-charset="UTF-8" style="display:inline">
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
                                            <th>Nom</th>
                                            <td>{{ $apprenant->nom }}</td>
                                        </tr>
                                        <tr>
                                            <th> Username </th>
                                            <td> {{ $apprenant->username }} </td>
                                        </tr>
                                        <tr>
                                            <th> Nom </th>
                                            <td> {{ $apprenant->nom }} </td>
                                        </tr>
                                        <tr>
                                            <th> Prenom </th>
                                            <td> {{ $apprenant->prenom }} </td>
                                        <tr>
                                            <th> Chantiers école</th>
                                            @foreach($apprenant->chantiers as $chantier)
                                            <td>{{ $chantier->titre }}<td>
                                            @endforeach
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
