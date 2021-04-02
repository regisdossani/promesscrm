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
                AFFICHER UNE CLASSE
           </header>
                 <div class="card-body">

                    <a href="{{ url('/classe') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                    <a href="{{ url('/classe/' . $classe->id . '/edit') }}" title="Edit classe"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>

                            <form method="POST" action="{{ url('classe' . '/' . $classe->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete classe" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
                            </form>
                            <br />
                            <br />

                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th>No</th>
                                            <td>{{ $classe->id }}</td>
                                        </tr>
                                        <tr>
                                            <th> Nom </th>
                                            <td>
                                                {{ $classe->name }} </td>
                                        </tr>

                                        <tr>
                                            <th> Filiere </th>
                                            <td> {{ $classe->filiere->nom }} </td>
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
