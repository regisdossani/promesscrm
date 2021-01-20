@extends('inc.master')
@include('admins.sidebar')

@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="form-w3layouts">

        <div class="container">
          <div class="row">

                <div class="col-md-9">
                    <section  class="panel">
                        <header class="panel-heading">
                            <div class="panel-title">
                                AFFICHER UN SUIVI HORAIRE  FORMATEURS
                            </div>
                        </header>
                            {{-- <div class="card-header">teacherattendance {{ $teacherattendance->id }}</div> --}}
                        <div class="card-body">

                                <a href="{{ url('/teacherattendances') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                                <a href="{{ url('/teacherattendances/' . $teacherattendance->id . '/edit') }}" title="Edit teacherattendance"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                <form method="POST" action="{{ url('teacherattendances' . '/' . $teacherattendance->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete teacherattendance" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                </form>
                                <br/>
                                <br/>

                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th>ID</th><td>{{ $teacherattendance->id }}</td>
                                            </tr>
                                            <tr><th> Class Id </th><td> {{ $teacherattendance->class_id }} </td></tr><tr><th> Formateur Id </th><td> {{ $teacherattendance->formateur_id }} </td></tr><tr><th> Date </th><td> {{ $teacherattendance->date }} </td></tr>
                                        </tbody>
                                    </table>
                                </div>

                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    </section>
</section>
@endsection