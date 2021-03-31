@extends('layouts.app')
@include('inc.styles')

@section('content')

<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <header class="panel-heading">
                    MODIFIER UNE MATIERE
            </header>

                    <div class="card-body">
                        <a href="{{ url('/nosmatieres') }}" title="Retour"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/nosmatieres/' . $nosmatiere->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('nosmatieres.form', ['formMode' => 'edit'])

                        </form>

                    </div>
                </div>
            </div>
    </section>
</section>
@endsection
