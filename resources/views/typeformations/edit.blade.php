@extends('inc.master')
@role('equipe')
@include('equipes.sidebar')
@endrole
@role('superadmin')
@include('admins.sidebar')
@endrole

@section('content')
<section id="main-content">

    <section class="wrapper">
        <div class="form-w3layouts">
        <div class="container">
            <div class="row">
                {{-- @include('admins.sidebar') --}}

                <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Modifier typeformation #{{ $typeformation->id }}</div>
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

                        <form method="POST" action="{{ url('/typeformations/' . $typeformation->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('typeformations.form', ['formMode' => 'edit'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
    </section>
</section>
@endsection
