@extends('layouts.app')
{{-- @include('inc.styles') --}}

@section('title', ' | Créer typeformation')
@section('content')
    <div class="container">
        <div class="row">
            @include('admins.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Créer un type de formation</div>
                    <div class="card-body">
                        <a href="{{ url('/typeformations') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/typeformations') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('typeformations.form', ['formMode' => 'Créer'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
