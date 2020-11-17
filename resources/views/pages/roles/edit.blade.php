@extends('layouts.app')
{{-- @include('inc.styles') --}}

{{-- @section('content')
    <div class="container">
        <div class="row">
            @include('admins.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">MODIFIER LE RÔLE #{{ $role->id }}</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/roles') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/admin/roles/' . $role->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('pages.roles.form', ['formMode' => 'edit'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}
@section('content')
<section class="content-header">
    <h1>
        Modifier le rôle #{{ $role->id }}
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('/admin/') }}"><i class="fa fa-dashboard"></i> Tableau de board</a></li>
        <li><a href="{{ url('/admin/roles') }}">/ Roles</a></li>
        <li class="active">/ Modifier</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{ url('/admin/roles') }}" title="Retour"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                    <br />
                    <br />

                    @if ($errors->any())
                        <ul class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <form method="POST" action="{{ url('/admin/roles/' . $role->id) }}" accept-charset="UTF-8" enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}

                        @include ('pages.roles.form', ['formMode' => 'edit'])

                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')

<script src="{{ url('theme/views/roles/form.js') }}" type="text/javascript"></script>

@endsection
