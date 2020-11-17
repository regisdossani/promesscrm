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

<section id="container">
    <section id="main-content">
        <section class="wrapper">
            <div class="form-w3layouts">
                <div class="row">
                    <div class="col-md-12">
                        <section class="panel">
                            <header class="panel-heading">

                                UTILISATEUR #{{ $user->id }}
                        </header>
                               <div class="panel-body">
                                    <div class="card-body">

                                    @include('includes.flash_message')

                                    <a href="{{ url('/admin/users') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>

                                    <a href="{{ url('/admin/users/' . $user->id . '/edit') }}" title="Edit user"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>

                                   @if($user->is_admin == 0)
                                      <form method="POST" action="{{ url('admin/users' . '/' . $user->id) }}" accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                         {{ csrf_field() }}
                                           <button type="submit" class="btn btn-danger btn-sm" title="Delete user" onclick="return confirm('Confirmez-vous la suppression??');"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
                                     </form>
                                  @endif
                            <br/>
                            <br/>

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>

                                @if(!empty($user->image))
                                    <tr>
                                        <td>
                                            <img src="{{ url('uploads/users/' . $user->image) }}" class="pull-right" width="200" height="200" />
                                        </td>
                                    </tr>
                                @endif

                                <tr>
                                    <th>ID</th><td>{{ $user->id }}</td>
                                </tr>
                                <tr><th> Nom </th><td> {{ $user->name }} </td> </tr>
                                <tr><th> Email </th><td> {{ $user->email }} </td></tr>
                                <tr><th> Titre Position  </th><td> {{ $user->position_title }} </td></tr>
                                <tr><th> Tél </th><td> {{ $user->phone }} </td></tr>
                                <tr><th> Est Admin </th><td> {!! $user->is_admin == 1? '<i class="fa fa-check"></i>':'<i class="fa fa-times"></i>' !!} </td></tr>
                                <tr><th> Est Activé </th><td> {!! $user->is_active == 1? '<i class="fa fa-check"></i>':'<i class="fa fa-ban"></i>' !!} </td></tr>

                                <tr>
                                    <th> Role </th>
                                    @if(!empty($user->getRoleNames()))
                                      @foreach($user->getRoleNames() as $v)
                                         <td> {{ $v }} </td>
                                      @endforeach
                                    @endif
                                </tr>
                            </tbody>
                        </table>
                    </div>

                 </div>
                </div>
            </section>
                </div>
                </div>
            </div>
    </section>
    </section>
</section>
</body >
</html >
