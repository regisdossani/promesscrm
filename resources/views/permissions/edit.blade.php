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

@section('content')
<section id="main-content">
    <section class="wrapper">
       <div class="table-agile-info">
           <div class="panel panel-default">
                <header class="panel-heading">
                    <div class="panel-title">
                        MODIFIER UNE PERMISSION
                    </div>
                </header>
                <div class="card-body">
                        <a href="{{ url('/admin/permissions') }}" title="Retour"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
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
                            <h1><i class='fa fa-key'></i> Edit {{$permission->name}}</h1>
                            <br>
                            {{ Form::model($permission, array('route' => array('permissions.update', $permission->id), 'method' => 'PUT')) }}
                            <div class="form-group">
                                {{ Form::label('name', 'Permission Name') }}
                                {{ Form::text('name', null, array('class' => 'form-control')) }}
                            </div>
                            <br>
                            {{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}
                            {{ Form::close() }}
                        </div>
                    </div>
            </div>
        </div>
    </section>
</section>
@endsection
