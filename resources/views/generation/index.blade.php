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
    {{-- <div class="form-w3layouts"> --}}

        <div class="container">
            <div class="row">

                <div class="col-md-10">
                    <section  class="card">
                            <header class="card-heading">
                                <div class="card-title">

                                <h1 class="text-center"><strong>  GESTION DES STOCK</strong></h1>

                                </div>
                            </header>
                                <br/>
                                <div class="panel-body">
                                    <div class="widget-header transparent">
                                <h2 class="text-center"><strong>Entrées</strong></h2>
                                <div class="additional-btn">
                                    <a href="{{ route('show.entres') }}" class="infos-dashboard">Plus d'options ...</a>
                                </div>
                                </div>
                                <div class="panel-body">
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

                        <br/>

                        <div class="col-md-12">
                            <div class="widget">
                                <div class="widget-header transparent">
                                    <h2 class="text-center"><strong>Types des objets</strong></h2>
                                    <div class="additional-btn">
                                        <a href="{{ route('type.home') }}" class="infos-dashboard">Plus d'options ...</a>
                                    </div>
                                </div>
                                <div class="widget-content">
                                        <div class="table-responsive">
                                            <table data-sortable class="table table-hover table-striped">
                                            <thead>
                                                <thead>
                                                    <tr>
                                                      <th>N°</th>
                                                     <th>Nom</th>
                                                      <th>Crée à</th>
                                                      <th>modifié à</th>
                                                    </tr>
                                                  </thead>
                                            </thead>

                                            <tbody>
                                                @foreach($types as $type)
                                                <tr>
                                                  <td>
                                                    {{ $type->id }}
                                                  </td>


                                                  <td>
                                                    <a href="{{ route('single.type',$type->id) }}">{{ $type->name }}</a>
                                                  </td>
                                                  <td>
                                                    {{ date('d/m/Y H:i',strtotime($type->created_at)) }}
                                                  </td>
                                                  <td>
                                                    {{ date('d/m/Y H:i',strtotime($type->updated_at)) }}
                                                  </td>
                                                </tr>
                                              @endforeach
                                              </tbody>
                                              </table>
                                        </div>
                                </div>
                            </div>
                        </div>

                    </section>

                </div>
            </div>
        </div>
    {{-- </div> --}}
    </section>
</section>
@endsection
