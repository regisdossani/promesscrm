@extends('inc.master')

@if (Auth::guard("admin")->check())
    @include('admins.sidebar')
@endif
@if (Auth::guard("equipe")->check())
    @include('equipes.sidebar')
@endif

@if (Auth::guard("apprenant")->check())
    @include('apprenants.sidebar')
@endif
@if (Auth::guard("formateur")->check())
    @include('formateurs.sidebar')
@endif


@section('title', ' | Créer permission')
@section('content')
<section id="main-content">
     <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">

                            <header class="panel-heading">
                                <div class="panel-title">
                                    ENRÉGISTRER UNE PERMISSION
                                </div>
                            </header>
                    <div class="card-body">
                        <a href="{{ url('/admin/permissions') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <div class='col-lg-4 col-lg-offset-4'>
                            <h1><i class='fa fa-key'></i> Add Permission</h1>
                            <br>
                            {{ Form::open(array('url' => 'permissions')) }}
                            <div class="form-group">
                                {{ Form::label('name', 'Name') }}
                                {{ Form::text('name', '', array('class' => 'form-control')) }}
                            </div><br>
                            @if(!$roles->isEmpty()) //If no roles exist yet
                                <h4>Assign Permission to Roles</h4>
                                @foreach ($roles as $role)
                                    {{ Form::checkbox('roles[]',  $role->id ) }}
                                    {{ Form::label($role->name, ucfirst($role->name)) }}
                                    <br>
                                @endforeach
                            @endif
                            <br>
                            {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}
                            {{ Form::close() }}
                        </div>
                </div>
            </div>
        </div>
     </section>
</section>
@endsection
