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
    <div class="table-agile-info">

        <div class="panel panel-default">

                            <header class="panel-heading">

                                    AFFICHER UN MEMBRE DU PERSONNEL

                            </header>

                    <div class="card-body">
                        <br/>
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
                                        <th> Référence </th>
                                        <td> {{ $equipe->reference }} </td>
                                    </tr>
                                    <tr>
                                        <th> Téléphone </th>
                                        <td> {{ $equipe->tel }} </td>
                                    </tr>
                                    <tr>
                                        <th>Sexe</th><td>{{ $equipe->sexe }}</td>
                                    </tr>

                                    <tr>
                                        <th>Email</th><td>{{ $equipe->email }}</td>
                                    </tr>
                                    <tr>
                                        <th> Cv </th>
                                        <td><link  href="{{url('uploads/equipe/'.$equipe->cv) }}" ></td>
                                    </tr>
                                    <tr>
                                        <th> Rôles </th>
                                        <td>
                                            @if(!empty($equipe->getRoleNames()))
                                                @foreach($equipe->getRoleNames() as $v)
                                                    <label class="badge badge-success">{{ $v }}</label>
                                                @endforeach
                                            @endif
                                        </td>
                                    </tr>


                                    <tr>
                                        <th> Contrat </th>
                                        <td>{{$equipe->contrat }}" </td>
                                    </tr>

                                    <tr>
                                        <th> Photo </th>
                                        <td><link  href="{{url('uploads/equipe/'.$equipe->photo)}}" width="50" height="60"}} ></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
   

    </section>
</section>
@endsection
