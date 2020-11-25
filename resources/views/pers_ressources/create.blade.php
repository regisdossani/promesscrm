@extends('layouts.app')
{{-- @include('inc.styles') --}}

@section('title', ' | Créer pers_ressource')
@section('content')
    <div class="container">
        <div class="row">
            @include('admins.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Créer un pers_ressource</div>
                    <div class="card-body">
                        <a href="{{ url('/persressources') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/persressources') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('pers_ressources.form', ['formMode' => 'Créer'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
