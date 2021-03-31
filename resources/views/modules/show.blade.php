@extends('inc.master')
@include('equipes.sidebar')

 @role('superadmin')
@include('admins.sidebar')
@endrole

@section('content')
<section id="main-content">

<section class="wrapper">
    <div class="table-agile-info">
        <div class="panel panel-default">
                            <header class="panel-heading">
                                <div class="panel-title">
                                    AFFICHER UN MODULE
                                </div>
                            </header>
                            <div class="card-body">
                                <br/>
                                <a href="{{ url('/modules') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                                <a href="{{ url('/modules/' . $module->id . '/edit') }}" title="Modifier ce module"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>

                                <form method="POST" action="{{ url('modules' . '/' . $module->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Supprimer ce module" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
                                </form>
                                <br/>
                                <br/>

                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th>ID</th><td>{{ $module->id }}</td>
                                            </tr>
                                            <tr><th> Nom </th><td> {{ $module->nom }} </td></tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                </div>
            </div>
   
</section>
</section>
@endsection
