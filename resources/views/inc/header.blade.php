<!--header start-->
<header class="header fixed-top clearfix">
    <!--logo start-->
    <div class="brand">
        <a href="{{ url('') }}" class="logo">
            <h3>CRM PROMESS</h3>
        </a>
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars"></div>
        </div>
    </div>
    <!--logo end-->

    <div class="top-nav clearfix">
        <!--search & user info start-->
        <ul class="nav pull-right top-menu">
            <li>
                <input type="text" class="form-control search" placeholder=" Rechercher">
            </li>

            <!-- user login dropdown start-->
            @if (Auth::guard("admin")->check())
                <li>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" src="images/2.png">
                        <span class="username">{{Auth::guard('admin')->user()->username}}</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i> Paramètres</a></li>
                        <li>
                            <a  href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                               <i class="fa fa-key">Déconnexion</i>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            @endif

            <!-- user login dropdown end -->

        </ul>
        <!--search & user info end-->
    </div>
    </header>
    <!--header end-->





           {{--  <li>
                <input type="text" class="form-control search" placeholder=" Rechercher">
            </li> --}}

            <!-- user login dropdown start-->
        {{-- @if (Auth::guard("admin")->check()) --}}

                   {{--  <ul class="dropdown-menu">
                                <li><a href="{{ url('/admin' . '/' . Auth::guard('admin')->user()->id) }}"><i class=" fa fa-suitcase"></i>Profile</a></li>
                                <li><a href="#"><i class="fa fa-cog"></i> Paramètres</a></li>
                                {{-- <li><a href="{{ route('logout') }}"><i class="fa fa-key"></i> Déconnexion</a></li> --}}

                                {{-- <li>
                                            <a class="fa fa-key" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Déconnexion') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                </li>
                    </ul>  --}}

                {{-- <div class="dropdown">
                        <h1 data-toggle="dropdown">
                            <span class="badge badge-secondary">{{Auth::guard('admin')->user()->username}} </span>
                        </h1>

                    <div class="dropdown-menu">
                        <a href="{{ url('/admin' . '/' . Auth::guard('admin')->user()->id) }}"><i class=" fa fa-suitcase"></i>Profile</a>
                        <a href="#"><i class="fa fa-cog"></i> Paramètres</a>
                        <a class="fa fa-key" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Déconnexion') }}
                        </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                    </div>
                </div>



        </li>--}}



        <!-- user login dropdown end -->
        @if (Auth::guard("apprenant")->check())
        <li>

            <a data-toggle="dropdown" >
                <img alt="" src="{{Auth::guard('apprenant')->user()->avatar}}">
                <span class="username">
                        {{Auth::guard('apprenant')->user()->username}}
                </span>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="{{ url('/apprenant' . '/' . Auth::guard('apprenant')->user()->id) }}"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Paramètres</a></li>
                {{-- <li><a href="{{ route('logout') }}"><i class="fa fa-key"></i> Déconnexion</a></li> --}}

                <li>
                            <a class="fa fa-key" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Déconnexion') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                </li>
            </ul>

        </li>
        @endif

    </div>
        <!--search & user info end-->
    </div>
    </header>
    <!--header end-->
        <!-- Modal -->
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Paramètres du CRM</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <a href="{{ url("/typeformations")}}">Créer un type de formation</a><br/>
                    <a href="{{ url("/formations")}}">Créer une formation</a><br/>
                    <a href="{{ url("/classe")}}">Créer une Classe</a><br/>
                </div>
            {{--  <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div> --}}
            </div>
            </div>
        </div>
        </div>
        </header>
        <!--header end-->
