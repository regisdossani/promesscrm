@extends('inc.master')
@role('apprenant')
@include('apprenants.sidebar')
@endrole
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
                <section  class="panel">

                    <header class="panel-heading">
                        <div class="panel-title">
                            CRÉER UN APPRENANT
                    </header>
                    <div class="panel-body">
                        <a href="{{ url('/apprenants') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
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

                                <form method="POST" action="{{ url('/apprenants') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    @include ('apprenants.form', ['formMode' => 'Créer'])
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
</section>
@endsection
