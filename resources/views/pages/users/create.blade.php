@extends('inc.master')
@section('title', ' | Créer un utilisateur')
@section('content')

    {{-- <section class="content-header">

        <ol class="breadcrumb">
            <li><a href="{{ url('/admin/') }}"><i class="fa fa-dashboard"></i> TABLEAU DE BOARD</a></li>
            <li><a href="{{ url('/admin/users') }}"> UTILISATEUR </a></li>
            <li class="active">CRÉER</li>
        </ol>
    </section> --}}

    <section id="main-content">

        <section class="wrapper">
            <div class="form-w3layouts">
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <header class="panel-heading">

                                CREER UN UTILISATEUR

                            </header>
                            <div class="panel-body">
                                <div class="position-center">
                        <a href="{{ url('/admin/users') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form  class="form-horizontal bucket-form" method="POST" action="{{ url('/admin/users') }}" accept-charset="UTF-8" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('pages.users.form', ['formMode' => 'create'])

                        </form>
                    </div>
                </div>
                    </section>
                    </div>
                </div>
            </div>
        </section>
        {{-- @include('inc.styles') --}}
    </section>
@endsection
