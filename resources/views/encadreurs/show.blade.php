@extends('inc.master')

@role('superadmin')
@include('admins.sidebar')
@endrole

@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="form-w3layouts">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <section class="panel">
                            <header class="panel-heading">
                                <div class="panel-title">
                                    AFFICHER UN ENCADREUR
                                </div>
                            </header>
                            {{-- <div class="card-header">encadreur {{ $encadreur->id }}</div> --}}
                            <div class="card-body">
                                <br/>
                                <a href="{{ url('/encadreurs') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                                <a href="{{ url('/encadreurs/' . $encadreur->id . '/edit') }}" title="Modifier cet encadreur"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>

                                <form method="POST" action="{{ url('encadreurs' . '/' . $encadreur->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Supprimer cet encadreur" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
                                </form>
                                <br/>
                                <br/>

                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            {{-- <tr> --}}
                                                {{-- <th>ID</th> --}}
                                                {{-- <td>{{ $encadreur->id }}</td> --}}
                                            {{-- </tr> --}}
                                            <tr><th> Noms  </th>
                                                <td> {{ $encadreur->noms }} </td>
                                            </tr>
                                                <tr><th> Formateur</th>
                                                    @if ($encadreur->formateur)
                                                    <td> {{ $encadreur->formateur->nom }} </td>
                                                     @endif
                                                </tr>
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
