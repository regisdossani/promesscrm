@extends('layouts.app')
{{-- @include('inc.styles') --}}
@include('admins.sidebar')

@section('title', ' | Créer permission')
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">CRÉER UNE PERMISSION</div>
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

                        <form method="POST" action="{{ url('/admin/permissions') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('pages.permissions.form', ['formMode' => 'Créer'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
