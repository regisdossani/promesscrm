@extends('inc.master')
@include('admins.sidebar')

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
                                MODIFIER UNE FORMATION
                            </div>
                        </header>

                        {{-- <div class="card-header">Modifier formation #{{ $formation->id }}</div> --}}
                        <div class="panel-body">
                            <a href="{{ url('/formations') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                            <br />
                            <br />

                            @if ($errors->any())
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                            <div class="row">

                                <form method="POST" action="{{ url('/formations/' . $formation->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                    {{ method_field('PATCH') }}
                                    {{ csrf_field() }}

                                    @include ('formations.form', ['formMode' => 'edit'])

                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
@endsection
