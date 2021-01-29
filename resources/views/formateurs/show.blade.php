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

                    <div class="col-md-9">
                        <section  class="panel">

                            <header class="panel-heading">
                                <div class="panel-title">
                                    AFFICHER UN FORMATEUR
                                </div>
                            </header>

                            <div class="panel-body">
                                @role('superadmin')
                                <a href="{{ url('/formateurs') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                            @else
                                <a href="{{ url('/formateurs/' . $formateur->id . '/edit') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>

                            @endrole

                                <a href="{{ url('/formateurs/' . $formateur->id . '/edit') }}" title="Edit formateur"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>

                                <form method="POST" action="{{ url('formateurs' . '/' . $formateur->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete formateur" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
                                </form>
                                <br/>
                                <br/>

                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                           {{--  <tr>
                                                <th>ID</th><td>{{ $formateur->id }}</td>
                                            </tr> --}}
                                            {{-- <tr><th> Username </th><td> {{ $formateur->username }} </td></tr> --}}
                                            <tr><th> Sexe </th><td> {{ $formateur->sexe }} </td></tr>
                                            <tr><th> Nom </th><td> {{ $formateur->nom }} </td></tr>
                                            <tr><th>Prénom </th><td> {{ $formateur->prenom }} </td></tr>
                                            <tr><th>Référence </th><td> {{ $formateur->reference }} </td></tr>
                                            <tr><th>Téléphone </th><td> {{ $formateur->tel }} </td></tr>
                                            <tr><th>Email </th><td> {{ $formateur->email }} </td></tr>
                                            <tr><th>Formation </th><td> {{ $formateur->formation }} </td></tr>
                                            <tr><th>Structure </th><td> {{ $formateur->structure }} </td></tr>
                                            {{-- <tr><th>Modules </th><td>
                                                @foreach ($formateur->modules as $module)
                                                    {{ $module->nom }}
                                                @endforeach
                                            </td></tr> --}}
                                            <tr><th>Adresse </th><td> {{ $formateur->adresse }} </td></tr>

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
