@extends('inc.master')
@include('equipes.sidebar')

 @role('superadmin')
@include('admins.sidebar')
@endrole

@section('content')
<section id="main-content">

<section class="wrapper">
    <div class="form-w3layouts">
        <div class="table-agile-info">

            <div class="panel panel-default">
                        {{-- <div class="card-header">Liste de l'équipe Promess</div> --}}
                            <header class="panel-heading">
                                    MODIFIER PERSONNEL ADMINISTRATIF
                            </header>
                                {{-- <div class="card-header">Modifier  #{{ $equipe->username }}</div> --}}
                            <div class="card-body">
                                <br/>
                                @role('superadmin')
                                <a href="{{ url('/equipes') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                                <br />
                                <br />
                                @endrole

                                @if (Auth::guard("equipe")->check())
                                    <a href="{{ url('/equipe') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                                    <br />
                                    <br />
                                @endif


                                @if ($errors->any())
                                    <ul class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif

                                <form method="POST" action="{{ url('/equipes/' . $equipe->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                    {{ method_field('PATCH') }}
                                    {{ csrf_field() }}

                                    @include ('equipes.form', ['formMode' => 'edit'])

                                </form>

                            </div>
                    </div>
                </div>
            </div>
    </section>
</section>
@endsection
