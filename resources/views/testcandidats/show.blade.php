@extends('inc.master')
@role('apprenant')
@include('apprenants.sidebar')
@endrole
@role('superadmin')
@include('admins.sidebar')
@endrole
@role('Resp-Pedagogique')
@include('equipes.sidebar')
@endrole


@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">

            <div class="panel panel-default">
                            <header class="panel-heading">
                                    AFFICHER UN TEST CANDIDAT
                            </header>
                            <div class="card-body">

                                <a href="{{ url('/testcandidats') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                                <a href="{{ url('/testcandidats/' . $testcandidat->id . '/edit') }}" title="Modifier test candidat"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>

                                <form method="POST" action="{{ url('testcandidats' . '/' . $testcandidat->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Supprimer test candidat" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
                                </form>
                                <br/>
                                <br/>

                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                           {{--  <tr>
                                                <th>ID</th>
                                                <td>{{ $testcandidat->id }}</td>
                                            </tr> --}}
                                            <tr><th> Candidat </th>
                                                <td> {{ $testcandidat->candidat->nom }} </td>
                                            </tr>
                                                <tr><th> Test Ecrit </th>
                                                    <td> {{ $testcandidat->test_ecrit }} </td>
                                            </tr>
                                            <tr>
                                                <th> Entretien </th><td> {{ $testcandidat->entretien }} </td>
                                            </tr>
                                        </tr>
                                        <tr><th> Résultat </th>
                                            <td>
                                                @switch($testcandidat->resultat )
                                                    @case('1')
                                                    Non retenu
                                                        @break
                                                    @case('2')
                                                    Absent(e)
                                                        @break
                                                    @case('3')
                                                    Excusé(e)
                                                        @break
                                                     @case('4')
                                                     Accepté(e) en FI
                                                        @break
                                                    @case('5')
                                                    Passer tests en FC
                                                        @break
                                                @endswitch
                                                {{-- {{ $testcandidat->resultat }} </td> --}}
                                        </tr>

                                        <tr><th> Test(Pièce jointe) </th>
                                            <td>
                                                 @if(isset($testcandidat->test_pj) && !empty($testcandidat->test_pj))
                                                <a href="{{ url('uploads/testcandidats/' . $testcandidat->test_pj) }}" ><i class="fa fa-download"></i> {{$testcandidat->test_pj}}</a>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr><th> Commentaire </th><td> {{ $testcandidat->commentaire }} </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
            </div>
        </div>
        </div>
    </section>
</section>
@endsection
