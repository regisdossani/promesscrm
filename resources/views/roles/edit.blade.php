@extends('inc.master')
@if (Auth::guard("admin")->check())
    @include('admins.sidebar')
@endif

@section('content')
<section id="main-content">

    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">

        <div class='col-lg-4 col-lg-offset-4'>
            <h1><i class='fa fa-key'></i> Edit Role: {{$role->name}}</h1>
            <hr>
            {{ Form::model($role, array('route' => array('roles.update', $role->id), 'method' => 'PUT')) }}
            <div class="form-group">
                {{ Form::label('name', 'Role Name') }}
                {{ Form::text('name', null, array('class' => 'form-control')) }}
            </div>
            <h5><b>Assign Permissions</b></h5>
            @foreach ($permissions as $permission)
                {{Form::checkbox('permissions[]',  $permission->id, $role->permissions ) }}
                {{Form::label($permission->name, ucfirst($permission->name)) }}
                <br>
            @endforeach
            <br>
            {{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}
            {{ Form::close() }}
        </div>
    </div>
        </div>
    </section>
</section>
@endsection


