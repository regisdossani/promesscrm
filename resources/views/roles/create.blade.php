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
                    <h1><i class='fa fa-key'></i> Add Role</h1>
                    <hr>
                    {{ Form::open(array('url' => 'roles')) }}
                    <div class="form-group">
                        {{ Form::label('name', 'Name') }}
                        {{ Form::text('name', null, array('class' => 'form-control')) }}
                    </div>
                    <h5><b>Assign Permissions</b></h5>
                    <div class='form-group'>
                        @foreach ($permissions as $permission)
                            {{ Form::checkbox('permissions[]',  $permission->id ) }}
                            {{ Form::label($permission->name, ucfirst($permission->name)) }}
                            <br>
                        @endforeach
                    </div>
                    {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}
                    {{ Form::close() }}
                </div>

            </div>
        </div>
    </section>
@endsection

