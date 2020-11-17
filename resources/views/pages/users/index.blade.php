
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

{{-- <section id="container">
    <!--main content start-->
    <ol class="breadcrumb">
        <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> TABLEAU DE BOARD</a></li>
        <li class="active">UTILISATEURS

        </li>
    </ol> --}}
<section id="main-content">
<section class="wrapper">
    <div class="form-w3layouts">
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">

                        LISTE DES UTILISATEURS

                </header>

               <div class="panel-body">
                <div class="card-body">

                    @include('includes.flash_message')

                    <a href="{{ url('/admin/users/create') }}" class="btn btn-success btn-sm pull-right" title="Nouvel utilisateur">
                        <i class="fa fa-plus" aria-hidden="true"></i> Ajouter
                    </a>

                   {{--  <form method="GET" action="{{ url('/admin/users') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Recherche..." value="{{ request('search') }}">
                            <span class="input-group-btn">
                                <button class="btn btn-secondary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form> --}}

                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Fonction </th>
                                <th>Photo </th>

                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nom }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->fonction }}</td>
                                        <td>{{ $item->image }}</td>
                                        {{-- <td>{!! $item->is_admin == 1? '<i class="fa fa-check"></i>':'<i class="fa fa-times"></i>' !!}</td> --}}
                                    
                                            <a href="{{ url('/admin/users/' . $item->id) }}" title="Voir"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Afficher</button></a>
                                            <a href="{{ url('/admin/users/' . $item->id . '/edit') }}" title="Modifier"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>

                                            {{-- <a href="{{ url('/admin/users/role/' . $item->id) }}" title="Select role"><button class="btn bg-purple btn-sm"><i class="fa fa-user" aria-hidden="true"></i> Rôle</button></a> --}}

                                            @if($item->is_admin == 0)
                                                <form method="POST" action="{{ url('/admin/users' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm" title="Supprimer un utilisateur" onclick="return confirm('Confirmer la suppression?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
                                                </form>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination-wrapper"> {!! $users->appends(['search' => Request::get('search')])->render() !!} </div>
                    </div>

                </div>
               </div>
           </section>
        </div>
    </div>
</div>
</section>
@include('inc.footer')
</section>
  @yield('scripts')
</body >
</html >
