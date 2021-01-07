@extends('inc.master')
@include('admins.sidebar')


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
                                    CRÉER UN ADMIN
                                </div>
                            </header>
                            <div class="panel-body">
                                    <a href="{{ url('/admins') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                                    <br />
                                    <br />

                                    @if ($errors->any())
                                        <ul class="alert alert-danger">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    @endif

                                    <form method="POST" action="{{ url('/admins') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                        {{ csrf_field() }}

                                        @include ('admins.form', ['formMode' => 'Créer'])

                                    </form>

                                </div>
                        </section>
            </div>
        </div>
    </div>
@endsection
