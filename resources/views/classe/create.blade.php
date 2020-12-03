@extends('inc.master')
@include('admins.sidebar')

@section('title', ' | Créer classe')
@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="form-w3layouts">
            <div class="container">
                <div class="row">
                  {{--   <div class="col-md-3">
                    </div> --}}
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-header">Créer un classe</div>
                            <div class="card-body">
                                <a href="{{ url('/classe') }}" title="Retour"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précéedent</button></a>
                                <br />
                                <br />

                                @if ($errors->any())
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                @endif

                                <form method="POST" action="{{ url('/classe') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                    {{ csrf_field() }}

                                    @include ('classe.form', ['formMode' => 'Créer'])

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
