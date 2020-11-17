@extends('inc.master')
@include('inc.header')


@section('content')
<section class="wrapper">
    <div class="form-w3layouts">

            <div class="container">
                <div class="row">

                    <div class="col-md-9">
                        <section  class="panel">

                            <header class="panel-heading">
                                <div class="panel-title">
                                    CRÉER UNE FORMATION
                                </div>
                            </header>
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
                                <div class="panel-body">

                                    <form method="POST" action="{{ url('/formations') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                        {{ csrf_field() }}

                                        @include ('formations.form', ['formMode' => 'Créer'])

                                    </form>
                                </div>

                            </div>
                        </section>
                    </div>
                </div>
            </div>
    </div>
</section>
@endsection
