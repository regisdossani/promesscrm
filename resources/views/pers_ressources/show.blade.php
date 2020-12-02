

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">pers_ressource {{ $pers_ressource->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/persressources') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                        <a href="{{ url('/persressources/' . $pers_ressource->id . '/edit') }}" title="Edit pers_ressource"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>

                        <form method="POST" action="{{ url('persressources' . '/' . $pers_ressource->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Supprimer cette perssonne ressource" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $pers_ressource->id }}</td>
                                    </tr>
                                    <tr><th> Nom </th><td> {{ $pers_ressource->nom }} </td></tr><tr><th> Prenom </th><td> {{ $pers_ressource->prenom }} </td></tr><tr><th> Email </th><td> {{ $pers_ressource->email }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
