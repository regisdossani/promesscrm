@extends('layouts.app')
{{-- @include('inc.styles') --}}

@section('content')
    <div class="container">
        <div class="row">
            @include('admins.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Modifier #{{ $eqattendance->id }}</div>
                    <div class="card-body">
                        <a href="{{ url('/eqattendance') }}" title="Retour"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Retour</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/eqattendance/' . $eqattendance->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('eqattendances.form', ['formMode' => 'edit'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
