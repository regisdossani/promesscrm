@extends('layouts.app')
{{-- @include('inc.styles') --}}

@section('content')
    <div class="container">
        <div class="row">
            @include('admins.sidebar')

            <div class="col-md-9">
                <div class="card">
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
                                    <tr>
                                        <th>ID</th><td>{{ $stage->id }}</td>
                                    </tr>
                                    <tr><th> Titre </th><td> {{ $stage->titre }} </td></tr><tr><th> Stage Entreprise </th><td> {{ $stage->stage_entreprise }} </td></tr>
                                    <tr><th> Professionel Id </th>
                                        @foreach($profs as $prof)
                                        <td  {{ isset($stage->professionnel_id) && $stage->professionnel_id == $prof->id ? 'selected' : ''}}>{{ $prof->nom}}</td>
                                     @endforeach
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
