@extends('inc.master')
@include('equipes.sidebar')

 @role('superadmin')
@include('admins.sidebar')
@endrole

@section('content')
<section id="main-content">

<section class="wrapper">
    <div class="form-w3layouts">

        <div class="container">
            <div class="row">

                <div class="col-md-10">
                    <section  class="card">
                        {{-- <div class="card-header">Liste de l'équipe Promess</div> --}}
                            <header class="panel-heading">
                                <div class="panel-title">
                                    AFFICHER UN MODULE
                                </div>
                            </header>
                    {{-- <div class="card-header">module {{ $module->id }}</div> --}}
                            <div class="card-body">

                                <a href="{{ url('/modules') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                                <a href="{{ url('/modules/' . $module->id . '/edit') }}" title="Edit module"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                <form method="POST" action="{{ url('modules' . '/' . $module->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete module" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>
</section>
@endsection
