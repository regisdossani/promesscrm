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
                    <div class="col-md-12">
                        <section  class="panel">
                            <header class="panel-heading">
                                <div class="panel-title">
                                    GESTION DES PARTENAIRES
                                </div>
                            </header>
                            {{-- <div class="card-header">Partenaires</div> --}}
                            <div class="panel-body">
                                @if (Auth::guard("admin")->check())
                                    <a href="{{ url('/partenaires/create') }}" class="btn btn-success btn-sm" title="Ajouter un partenaire">
                                            <i class="fa fa-plus" aria-hidden="true"></i> Nouveau
                                    </a>
                                @endif
                                <div class="pull-right" style="margin-right:5px">

                                        <form method="GET" action="{{ url('/partenaires') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="search" placeholder="Rechercher..." value="{{ request('search') }}">
                                                <span class="input-group-append">
                                                    <button class="btn btn-secondary" type="submit">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </form>
                                </div>
                                        <br/>
                                        <br/>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                            <th>#</th>
                                                            <th>Raison social</th>
                                                            <th>Type d'organisation</th>
                                                            <th>Nom du Référent</th>
                                                            <th>Email</th>
                                                            <th>Téléphone</th>
                                                            <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                 <tbody>

                                                <tr>
                                                    <th colspan="6">PARTENAIRES TECHNIQUES ET FIANCIERS</th>
                                                        @foreach($partenaires as $item)
                                                            @if ($item->type_partenariat=='PARTENAIRES TECHNIQUES ET FIANCIERS')
                                                                <tr>
                                                                    <td>{{ $loop->iteration }}</td>

                                                                    <td>{{ $item->raison_social }}</td>


                                                                    <td>{{ $item->type_organisation }}</td>


                                                                    <td>{{ $item->nom_referent }}</td>


                                                                    <td>{{ $item->email }}</td>


                                                                    <td>{{ $item->tel }}</td>

                                                                    <td>
                                                                        <a href="{{ url('/partenaires/' . $item->id) }}" title="View partenaire"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                                                        <a href="{{ url('/partenaires/' . $item->id . '/edit') }}" title="Edit partenaire"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>

                                                                        <form method="POST" action="{{ url('/partenaires' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                                            {{ method_field('DELETE') }}
                                                                            {{ csrf_field() }}
                                                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete partenaire" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                                        </form>
                                                                    </td>
                                                                </tr>
                                                            @endif
                                                        @endforeach
                                                </tr>



                                                <tr>
                                                    <th colspan="6">ENTREPRISES PARTENAIRES</th>
                                                        @foreach($partenaires as $item)
                                                            @if ($item->type_partenariat=="ENTREPRISES PARTENAIRES" )
                                                                <tr>
                                                                          
                                                                    <td>{{ $item->raison_social }}</td>
                                                                            
                                                                            {{-- <td>{{ $loop->iteration }}</td> --}}
                                                                           
                                                                    <td>{{ $item->type_organisation }}</td>

                                                                
                                                                            
                                                                        <td>{{ $item->nom_referent }}</td>
                                                                        <td>{{ $item->email }}</td>
                                                                        <td>{{ $item->tel }}</td>
                                                                            <td>
                                                                                <a href="{{ url('/partenaires/' . $item->id) }}" title="View partenaire"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                                                                <a href="{{ url('/partenaires/' . $item->id . '/edit') }}" title="Edit partenaire"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>

                                                                                <form method="POST" action="{{ url('/partenaires' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                                                    {{ method_field('DELETE') }}
                                                                                    {{ csrf_field() }}
                                                                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete partenaire" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                                                </form>
                                                                            </td>
                                                                </tr>
                                                            @endif
                                                        @endforeach
                                                </tr>

                                                <tr>
                                                    <th colspan="6">COLLECTIVITES TERRITORIALES</th>
                                                        @foreach($partenaires as $item)

                                                            @if ($item->type_partenariat=="COLLECTIVITES TERRITORIALES" )
                                                                <tr>
                                                                            <td>{{ $loop->iteration }}</td>
                                                                            <td>{{ $item->raison_social }}</td>
                                                                            <td>{{ $item->type_organisation }}</td>
                                                                            <td>{{ $item->nom_referent }}</td>
                                                                            <td>{{ $item->email }}</td>
                                                                            <td>{{ $item->tel }}</td>

                                                                            <td>
                                                                                <a href="{{ url('/partenaires/' . $item->id) }}" title="View partenaire"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                                                                <a href="{{ url('/partenaires/' . $item->id . '/edit') }}" title="Edit partenaire"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>

                                                                                <form method="POST" action="{{ url('/partenaires' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                                                    {{ method_field('DELETE') }}
                                                                                    {{ csrf_field() }}
                                                                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete partenaire" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                                                </form>
                                                                    </tr>  </td>
                                                            @endif
                                                    @endforeach
                                                </tr>


                                                <tr>
                                                    <th colspan="6">PARTENAIRES DE MISE EN OEUVRE</th>
                                                        @foreach($partenaires as $item)
                                                            
                                                            @if ($item->type_partenariat=="PARTENAIRES DE MISE EN OEUVRE" )
                                                                <tr>
                                                                        <td>{{ $loop->iteration }}</td>
                                                                        <td>{{ $item->raison_social }}</td>
                                                                        <td>{{ $item->type_organisation }}</td>
                                                                        <td>{{ $item->nom_referent }}</td>
                                                                        <td>{{ $item->email }}</td>
                                                                        <td>{{ $item->tel }}</td>

                                                                        <td>
                                                                            <a href="{{ url('/partenaires/' . $item->id) }}" title="View partenaire"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                                                            <a href="{{ url('/partenaires/' . $item->id . '/edit') }}" title="Edit partenaire"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>

                                                                            <form method="POST" action="{{ url('/partenaires' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                                                {{ method_field('DELETE') }}
                                                                                {{ csrf_field() }}
                                                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete partenaire" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                                            </form>
                                                                    </td>
                                                                </tr>
                                                            @endif

                                                        @endforeach
                                                    </tr>


                                                            <tr>
                                                                <th colspan="6">STRUCTURES DE L'ADMINISTRATION</th>
                                                                @foreach($partenaires as $item)

                                                                    @if ($item->type_partenariat=='STRUCTURES ADMINISTRATION' )

                                                                            <td>{{ $loop->iteration }}</td>
                                                                            <td>{{ $item->raison_social }}</td>
                                                                            <td>{{ $item->type_organisation }}</td>
                                                                            <td>{{ $item->nom_referent }}</td>
                                                                            <td>{{ $item->email }}</td>
                                                                            <td>{{ $item->tel }}</td>

                                                                            <td>
                                                                                <a href="{{ url('/partenaires/' . $item->id) }}" title="Voir ce partenaire"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                                                                <a href="{{ url('/partenaires/' . $item->id . '/edit') }}" title="Modifier ce partenaire"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>

                                                                                <form method="POST" action="{{ url('/partenaires' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                                                    {{ method_field('DELETE') }}
                                                                                    {{ csrf_field() }}
                                                                                    <button type="submit" class="btn btn-danger btn-sm" title="Supprimer ce partenaire" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                                                </form>
                                                                            </td>
                                                                    @endif
                                                                @endforeach

                                                            </tr>


                                                            <tr>
                                                                <th colspan="6">STRUCTURES  D’ENSEIGNEMENT  ET DE FORMATION</th>
                                                                    @foreach($partenaires as $item)

                                                                        @if ($item->type_partenariat=="STRUCTURES ENSEIGNEMENT ET DE FORMATION" )
                                                                            <tr>
                                                                                <td>{{ $item->raison_social }}</td>
                                                                            </tr>
                                                                            {{-- <td>{{ $loop->iteration }}</td> --}}
                                                                            <tr>
                                                                                <td>{{ $item->type_organisation }}</td>

                                                                            </tr>
                                                                            <td>{{ $item->nom_referent }}</td>
                                                                            <td>{{ $item->email }}</td>
                                                                            <td>{{ $item->tel }}</td>
                                                                            <td>
                                                                                <a href="{{ url('/partenaires/' . $item->id) }}" title="View partenaire"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                                                                <a href="{{ url('/partenaires/' . $item->id . '/edit') }}" title="Edit partenaire"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>

                                                                                <form method="POST" action="{{ url('/partenaires' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                                                    {{ method_field('DELETE') }}
                                                                                    {{ csrf_field() }}
                                                                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete partenaire" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                                                </form>
                                                                            </td>

                                                                        @endif
                                                                    @endforeach
                                                            </tr>
                                                    </tbody>
                                            </table>
                                            <div class="pagination-wrapper"> {!! $partenaires->appends(['search' => Request::get('search')])->render() !!} </div>
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
