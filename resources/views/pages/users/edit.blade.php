<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta name="csrf_token" content="{{ csrf_token() }}" >
    <title>CRM PROMESS @yield('title')</title>

    <meta name="csrf_token" content="{{ csrf_token() }}" />
    @include('inc.styles')
    @include('inc.header')
    @include('inc.sidebar')

    {{-- <script>
        var BASE_URL = '{{ url("/") }}';
    </script> --}}

</head>
<body >
    <section id="main-content">
        <section class="wrapper">
            <div class="form-w3layouts">
                <div class="row">

                      <div class="col-md-9">
                        <section class="panel">
                            <header class="panel-heading">

                                MODIFIER L'UTILISATEUR #{{ $user->id }}

                        </header>
                         <div class="panel-body">

                        <div class="card-body">
                        <a href="{{ url('/admin/users') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/admin/users/' . $user->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('pages.users.form', ['formMode' => 'edit'])

                        </form>

                    </div>
                </div>
            </section>
            </div>
        </div>
             </div>
    </section>
    </section>
</body >
</html >
