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
                    <div class="col-lg-10">
                        <section class="panel">
                            <header class="panel-heading">
                                <div class="panel-title">
                                    AFFICHER UN ENCADREUR
                                </div>
                            </header>
                            {{-- <div class="card-header">encadreur {{ $encadreur->id }}</div> --}}
                            <div class="card-body">

                                <a href="{{ url('/encadreurs') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                                <a href="{{ url('/encadreurs/' . $encadreur->id . '/edit') }}" title="Edit encadreur"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                <form method="POST" action="{{ url('encadreurs' . '/' . $encadreur->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete encadreur" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                </form>
                                <br/>
                                <br/>

                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th>ID</th><td>{{ $encadreur->id }}</td>
                                            </tr>
                                            <tr><th> Professionel Id </th><td> {{ $encadreur->professionel_id }} </td></tr><tr><th> Formateur Id </th><td> {{ $encadreur->formateur_id }} </td></tr>
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
