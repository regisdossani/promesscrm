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
                                <div class="panel-title">
                                    AFFICHER UN STAGE
                                </div>
                            </header>
                            <div class="card-header">stage {{ $stage->id }}</div>
                            <div class="card-body">

                                <a href="{{ url('/stages') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                                <a href="{{ url('/stages/' . $stage->id . '/edit') }}" title="Modifier ce stage"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>

                                <form method="POST" action="{{ url('stages' . '/' . $stage->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Supprimer ce stage" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
                                </form>
                                <br/>
                                <br/>

                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            {{-- <tr>
                                                <th>ID</th>
                                                <td>{{ $stage->id }}</td>
                                            </tr> --}}
                                            <tr><th> Date </th>
                                                <td> {{ $stage->date }} </td>
                                            </tr>
                                            <tr><th> Durée(J) </th>
                                                <td> {{ $stage->duree }} </td>
                                            </tr>
                                            <tr>
                                                <th>  Entreprise </th>
                                                <td> {{ $stage->entreprise }} </td>
                                            </tr>
                                            <tr>
                                                <th> Encadreur  </th>
                                                @if ($stage->encadreur)
                                                <td>{{$stage->encadreur->noms}}</td>
                                                @endif
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
