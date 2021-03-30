@extends('inc.master')
@include('admins.sidebar')
@include('inc.styles')

@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">

            <div class="panel panel-default">
                        <header class="panel-heading">
                                ENRÉGISTRER UN SUIVI HORAIRE  FORMATEURS
                        </header>
                    {{-- <div class="card-header">Créer un teacherattendance</div> --}}
                        <div class="card-body">
                            <br/>
                            <a href="{{ url('/teacherattendances') }}" title="Précédente"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédente</button></a>
                            <br />
                            <br />

                            @if ($errors->any())
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif

                            <form method="POST" action="{{ url('/teacherattendances') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                @include ('teacherattendances.form', ['formMode' => 'Créer'])

                            </form>

                        </div>
            </div>
        </div>
   
    </section>
</section>
@endsection
