
@extends('inc.master')
@role('superadmin')
@include('admins.sidebar')
@endrole
@role('Resp-Pedagogique')
@include('equipes.sidebar')
@endrole
@role('apprenant')
@include('apprenants.sidebar')
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
                            AFFICHER LE CANDIDAT
                        </div>
                    </header>

                    <div class="panel-body">
                        <a href="{{ url('/candidats') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                        <a href="{{ url('/candidats/' . $candidat->id . '/edit') }}" title="Modifier ce candidat"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>

                        <form method="POST" action="{{ url('/candidats' . '/' . $candidat->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Supprimer ce candidat" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>Genre</th>
                                        <td>{{ $candidat->sexe }}</td>
                                    </tr>
                                    <tr><th> Nom </th>
                                        <td> {{ $candidat->nom }} </td>
                                    </tr>

                                    <tr><th> Provenance </th>
                                        <td> {{ $candidat->provenance }} </td>
                                    </tr>
                                    <tr><th> Région </th>
                                        <td> {{ $candidat->region }} </td>
                                    </tr>


                                    <tr><th> Téléphone </th>
                                        <td> {{ $candidat->tel }} </td>
                                    </tr>

                                    <tr><th> Filière </th>
                                        <td>  @foreach ($filieres as $fil)
                                            @if($candidat->filiere_id==$fil->id)
                                                   {{$fil->nom}}
                                           @endif
                                       @endforeach </td>
                                    </tr>
e
                                    <tr><th> Promo </th>
                                        <td> @foreach ($promos as $promo)
                                            @if($candidat->promo_id==$promo->id)
                                                   {{$promo->nom}}
                                           @endif
                                       @endforeach </td>
                                    </tr>

                                    <tr><th> Parrain </th>
                                        <td> {{ $candidat->parrain }} </td>
                                    </tr>
                                    <tr><th> Tél Parrain </th>
                                        <td> {{ $candidat->tel_parrain }} </td>
                                    </tr>
                                    <tr><th> Email Parrain  </th>
                                        <td> {{ $candidat->email_parrain }} </td>
                                    </tr>
                                    <tr><th> Reception Dossier  </th>
                                        <td>
                                            @if ($candidat->reception_dossier=='1')
                                                    Oui
                                          @else
                                                    Non
                                            @endif
                                        </td>
                                    </tr>
                                    <tr><th> Pj Depot de dossier(1)  </th>
                                        <td> {{ $candidat->pj_depotdossier }} </td>
                                    </tr>
                                    <tr><th> Pj Depot de dossier(2)  </th>
                                        <td> {{ $candidat->pj_depotdossier }} </td>
                                    </tr>
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
</section>
@endsection
