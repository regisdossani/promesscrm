
@extends('inc.master')

@role('superadmin')
@include('admins.sidebar')
@endrole
@role('Resp-Pedagogique')
@include('equipes.sidebar')
@endrole
@role('apprenant')
@include('apprenants.sidebar')
@endrole

@section('content')
<section class="wrapper">
    <div class="form-w3layouts">

    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div data-collapsed="0" class="panel">

                    <header class="panel-heading">
                        <div class="panel-title">
                            MODIFIER LE CANDIDAT
                        </div>
                    </header>

                    <div class="panel-body">
                        <a href="{{ url('/candidats') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                        <br />
                        <br />
                            <div class="row">

                                @if ($errors->any())
                                    <ul class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                                <div class="panel-body">

                                <form method="POST" action="{{ url('/candidats/' . $candidat->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                    {{ method_field('PATCH') }}
                                    {{ csrf_field() }}

                                    @include ('candidats.form', ['formMode' => 'edit'])

                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
</section>
@endsection
