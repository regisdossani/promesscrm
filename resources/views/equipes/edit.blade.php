@extends('layouts.app')
{{-- @include('inc.styles') --}}

@section('content')
    <div class="container">
        <div class="row">
            @include('equipes.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Modifier  #{{ $equipe->username }}</div>
                    <div class="card-body">
                        @role('superadmin')
                        <a href="{{ url('/equipes') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                        <br />
                        <br />
                        @endrole
                       <a href="{{ url('/equipe') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                       <br />
                       <br />



                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/equipes/' . $equipe->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('equipes.form', ['formMode' => 'edit'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
