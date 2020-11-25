@extends('inc.master')
@include('inc.header')

@section('content')
<section class="wrapper">
    <div class="form-w3layouts">

        <div class="container">

                    <div class="row">

                        <div class="col-md-10">
                            <section  class="panel">
                                <header class="panel-heading">
                                    <div class="panel-title">
                                        CRÉER UN FORMATEUR
                                    </div>
                                </header>

                                <div class="panel-body">
                                    @role('superadmin')

                                        <a href="{{ url('/formateurs') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                                    @endrole
                                    <br />
                                        <br />
                                        <div class="row">

                                            @if ($errors->any())
                                                <ul class="alert alert-danger">
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                            <div class="panel-body">

                                                <form method="POST" action="{{ url('/formateurs') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                                    {{ csrf_field() }}

                                                    @include ('formateurs.form', ['formMode' => 'Créer'])

                                                </form>
                                            </div>
                                        </div>

                                    </div>
                            </section>
                        </div>
                    </div>
                </div>

    </div>
</section>
@endsection
