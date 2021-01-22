@extends('inc.master')
@if (Auth::guard("admin")->check())
    @include('admins.sidebar')
@endif

@section('content')
<section id="main-content">

    <section class="wrapper">

        <div class="form-w3layouts">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <section  class="panel">

                            <header class="panel-heading">
                                <div class="panel-title">
                                    MODIFIER UN RÔLE
                                </div>
                            </header>
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

                                    @include ('roles.form', ['formMode' => 'edit'])

                                </form>

                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
@endsection

@section('scripts')

<script src="{{ url('theme/views/roles/form.js') }}" type="text/javascript"></script>

@endsection
