@extends('inc.master')
@if (Auth::guard("admin")->check())
    @include('admins.sidebar')
@endif

@section('content')

<section id="main-content">

    <section class="wrapper">

        <div class="table-agile-info">
            <div class="panel panel-default">
                <header class="panel-heading">
                    CRÉER DES RÔLES
                </header>
                {{-- <div class='col-lg-4 col-lg-offset-4'> --}}
                    {{-- <h1><i class='fa fa-key'></i> Créer un Role</h1> --}}
                <div class="panel-body">
                    <a href="{{ url('/roles') }}" title="Précédent"><button class="btn btn-default pull-left""><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                    <hr>
                    {{ Form::open(array('url' => 'roles')) }}
                    <div class="col-md-6 mb-3">
                        {{ Form::label('name', 'Nom') }}
                        {{ Form::text('name', null, array('class' => 'form-control')) }}
                    </div>


                    <h3><b>Assignez des Permissions</b></h3>
                    <div class='form-group'>
                        @foreach ($permissions as $permission)
                            {{ Form::checkbox('permissions[]',  $permission->id ) }}
                            {{ Form::label($permission->name, ucfirst($permission->name)) }}
                            <br>
                        @endforeach
                    </div>
                    {{ Form::submit('Ajouter', array('class' => 'btn btn-primary')) }}
                    {{ Form::close() }}
                </div>
            </div>
            </div>
        </div>
    </section>
@endsection

