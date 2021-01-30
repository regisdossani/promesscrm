@extends('inc.master')
@include('equipes.sidebar')

 @role('superadmin')
@include('admins.sidebar')
@endrole

@section('content')
<section id="main-content">
<section class="wrapper">
    <div class="form-w3layouts">

        <div class="container">
            <div class="row">

                <div class="col-md-10">
                    <section  class="card">
                        {{-- <div class="card-header">Liste de l'équipe Promess</div> --}}
                            <header class="card-heading">
                                <div class="card-title">
                                    GESTION DES MODULES
                                </div>
                            </header>

                            <div class="widget">
                                <div class="widget-header transparent">
                                <h2 class="text-center"><strong>Entres</strong></h2>
                                <div class="additional-btn">
                                    <a href="{{ route('show.entres') }}" class="infos-dashboard">Plus d'options ...</a>
                                </div>
                                </div>
                                <div class="widget-content">
                                <div class="table-responsive">
                                    <table data-sortable class="table table-hover table-striped">
                                    <thead>
                                            <thead>
                                                <tr>
                                                    <th>Types</th>
                                                    <th>Date</th>
                                                    <th>N°=Facture</th>
                                                    <th>Quantité</th>
                                                    <th>Prix Unitaire</th>
                                                    <th>Fournisseur</th>
                                                </tr>
                                            </thead>
                                    </thead>

                                    <tbody>
                                                @foreach($entres as $entre)
                                                <tr>

                                                    <td>{{ $entre->type->name }}</td>
                                                    <td>{{ $entre->date }}</td>
                                                    <td>{{ $entre->nfacture }}</td>
                                                    <td>{{ $entre->quantite}}</td>
                                                    <td>{{ $entre->prix_uni}}</td>
                                                    <td>{{ $entre->fourni }}</td>

                                                </tr>
                                                @endforeach

                                            </tbody>
                                    </table>
                                </div>
                                </div>
                            </div>

                    </section>

                        <div class="col-md-12">
                            <div class="widget">
                                <div class="widget-header transparent">
                                    <h2 class="text-center"><strong>Sorties</strong></h2>
                                    <div class="additional-btn">
                                        <a href="{{ route('show.sorties') }}" class="infos-dashboard">Plus d'options ...</a>
                                    </div>
                                </div>
                                <div class="widget-content">
                                        <div class="table-responsive">
                                            <table data-sortable class="table table-hover table-striped">
                                            <thead>
                                                    <thead>
                                                        <tr>
                                                            <th>Types</th>
                                                            <th>Date</th>
                                                            <th>N°=Facture</th>
                                                            <th>Quantite</th>
                                                            <th>Prix Unitaire</th>
                                                            <th>Fournisseur</th>
                                                        </tr>
                                                    </thead>
                                            </thead>

                                            <tbody>
                                                        @foreach($sorties as $sortie)
                                                        <tr>

                                                            <td>{{ $sortie->type->name }}</td>
                                                            <td>{{ $sortie->date }}</td>
                                                            <td>{{ $sortie->nfacture }}</td>
                                                            <td>{{ $sortie->quantite}}</td>
                                                            <td>{{ $sortie->prix_uni}}</td>
                                                            <td>{{ $sortie->fourni }}</td>

                                                        </tr>
                                                        @endforeach

                                                    </tbody>
                                            </table>
                                        </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    </section>
</section>
@endsection
