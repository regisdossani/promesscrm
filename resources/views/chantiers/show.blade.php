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
                    <div class="col-md-10">
                        <section  class="panel">
                            <header class="panel-heading">
                                <div class="panel-title">
                                    AFFICHER UN CHANTIER
                            </header>


                                {{-- <div class="card-header">chantier {{ $chantier->id }}</div> --}}
                                <div class="card-body">

                                    <a href="{{ url('/chantiers') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                                    <a href="{{ url('/chantiers/' . $chantier->id . '/edit') }}" title="Edit chantier"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                    <form method="POST" action="{{ url('chantiers' . '/' . $chantier->id) }}" accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete chantier" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                    </form>
                                    <br/>
                                    <br/>

                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                               {{--  <tr>
                                                    <th>ID</th><td>{{ $chantier->id }}</td>
                                                </tr> --}}
                                                <tr><th> Titre Chantier </th>
                                                    <td> {{ $chantier->titre }} </td>
                                                </tr><tr><th> Référence </th>
                                                    <td> {{ $chantier->reference }} </td>
                                                </tr><tr><th> Date </th>
                                                    <td> {{ $chantier->date }} </td></tr>
                                                </tr><tr><th> Durée(J) </th>
                                                    <td> {{ $chantier->duree_j }} </td></tr>
                                                </tr><tr><th> Durée(h)</th>
                                                    <td> {{ $chantier->duree_h }} </td></tr>
                                                </tr><tr><th> Maitre d'Oeuvre</th>
                                                    <td> {{ $chantier->maitre_oeuvre }} </td></tr>
                                                </tr><tr><th>Formateur</th>
                                                    <td> {{ $chantier->formateur }} </td></tr>
                                                </tr><tr><th>Descriptif</th>
                                                    <td> {{ $chantier->descriptif }} </td></tr>
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
