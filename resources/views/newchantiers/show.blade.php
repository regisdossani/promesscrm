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
                                    AFFICHER UN NOUVEAUX CHANTIER ÉCOLE
                                </div>
                            </header>
                            <div class="panel-body">

                                <a href="{{ url('/newchantiers') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                                <a href="{{ url('/newchantiers/' . $newchantier->id . '/edit') }}" title="Edit newchantier"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>

                                <form method="POST" action="{{ url('newchantiers' . '/' . $newchantier->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete newchantier" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
                                </form>
                                <br/>
                                <br/>

                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                           {{--  <tr>
                                                <th>ID</th><td>{{ $newchantier->id }}</td>
                                            </tr> --}}
                                            <tr><th> Nom </th>
                                                <td> {{ $newchantier->nom }} </td>
                                            </tr>
                                            <tr><th> Prenom </th>
                                                <td> {{ $newchantier->prenom }} </td>
                                            </tr>
                                            <tr>
                                                <th> Structure </th>
                                                <td> {{ $newchantier->structure }} </td>
                                            </tr>

                                            <tr>
                                                <th> Téléphone </th>
                                                <td> {{ $newchantier->tel }} </td>
                                            </tr>
                                            <tr>
                                                <th> Email </th>
                                                <td> {{ $newchantier->email }} </td>
                                            </tr>
                                            <tr>
                                                <th> État </th>
                                            <td>
                                                @if ($newchantier->etat==1)
                                                Réalisé
                                                @endif
                                                @if ($newchantier->etat==2)
                                                Non Réalisé
                                                @endif
                                            </td>
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
