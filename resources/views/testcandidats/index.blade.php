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
                                    TESTS DES CANDIDATS APPRENANTS
                            </header>

                            {{-- <div class="card-header">Testcandidats</div> --}}
                            <div class="card-body">
                                <br/>
                                <a href="{{ url('/testcandidats/create') }}" class="btn btn-success btn-sm" title="Add New testcandidat">
                                    <i class="fa fa-plus" aria-hidden="true"></i> Nouveau
                                </a>

                                @if ($message = Session::get('flash_message'))
                                <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>{{ $message }}</strong>
                                </div>
                                @endif



                                <div class="pull-right" style="margin-right:5px">
                                    <form method="GET" action="{{ url('/testcandidats') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                                        <div class="form-inline">
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
                                                <th>Candidat</th>
                                                <th>Test Ecrit</th>
                                                <th>Entretien</th>
                                                <th>Résultat</th>

                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($testcandidats as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->candidat->nom }}</td>
                                                <td>{{ $item->test_ecrit }}</td>
                                                <td>{{ $item->entretien }}</td>

                                                <td>
                                                    @if ($item->resultat=='5')
                                                        Passer tests en FC
                                                    @endif
                                                    @if ($item->resultat=='4')
                                                        Accepté(e) en FI                                                    @endif
                                                    @if ($item->resultat=='3')
                                                            Excusé(e)
                                                    @endif
                                                    @if ($item->resultat=='2')
                                                            Absent(e)
                                                    @endif
                                                    @if ($item->resultat=='1')
                                                            Non retenu
                                                    @endif
                                                </td>

                                                <td>
                                                    <a href="{{ url('/testcandidats/' . $item->id) }}" title="Voir test candidat"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> </button></a>
                                                    <a href="{{ url('/testcandidats/' . $item->id . '/edit') }}" title="Modifier test candidat"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </button></a>

                                                    <form method="POST" action="{{ url('/testcandidats' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-danger btn-sm" title="Supprimer testcandidat" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="pagination-wrapper"> {!! $testcandidats->appends(['search' => Request::get('search')])->render() !!} </div>
                                </div>

                            </div>

                    </div>
            </div>
    </section>
</section>
@endsection
