@extends('inc.master')
@include('equipes.sidebar')

 @role('superadmin')
@include('admins.sidebar')
@endrole

@section('content')
<section id="main-content">
<section class="wrapper">
    <div class="table-agile-info">
        <div class="panel panel-default">

            <header class="panel-heading">
                ENRÉGISTRER DES NOTES
             </header>
                        <div class="card-body">
                            <a href="{{ url('/marks') }}" title="Retour"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Retour</button></a>
                            <br />
                            <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/marks') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('marks.form', ['formMode' => 'Créer'])

                        </form>

                    </div>


        </div>
    </div>
    </section>
</section>
@endsection
