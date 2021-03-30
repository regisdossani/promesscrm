@extends('inc.master')
@include('admins.sidebar')

@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">

            <div class="panel panel-default">
                        <header class="panel-heading">
                                MODIFIER UN SUIVI HORAIRE  FORMATEURS
                        </header>
                        {{-- <div class="card-header">Modifier teacherattendance #{{ $teacherattendance->id }}</div> --}}
                        <div class="card-body">
                            <a href="{{ url('/teacherattendances') }}" title="Retour"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                            <br />
                            <br />

                            @if ($errors->any())
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif

                            <form method="POST" action="{{ url('/teacherattendances/' . $teacherattendance->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                {{ method_field('PATCH') }}
                                {{ csrf_field() }}

                                @include ('teacherattendances.form', ['formMode' => 'edit'])

                            </form>

                        </div>
            </div>
        </div>
    </section>
</section>
@endsection
