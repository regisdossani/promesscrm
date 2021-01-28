{{-- <section id="container"> --}}
    <!--header start-->
    <header class="header fixed-top clearfix">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script>

        <!--logo start-->
        <div class="brand">
            @if (Auth::guard("admin")->check())
                <a href="{{ url('/admin') }}" class="logo">
                    <h3>CRM PROMESS</h3>
                </a>
            @endif

            @if (Auth::guard("equipe")->check())
            <a href="{{ url('/equipe') }}" class="logo">
                <h3>CRM PROMESS</h3>
            </a>
            @endif

            @if (Auth::guard("apprenant")->check())
            <a href="{{ url('/apprenant') }}" class="logo">
                <h3>CRM PROMESS</h3>
            </a>
            @endif
            @if (Auth::guard("formateur")->check())
            <a href="{{ url('/formateur') }}" class="logo">
                <h3>CRM PROMESS</h3>
            </a>
            @endif

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
                            <li><a href="{{ url('/admins/'. Auth::guard('admin')->user()->id) }}"><i class=" fa fa-suitcase"></i>Profile</a></li>
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
              @if (Auth::guard("apprenant")->check())
                <li>

                    <a data-toggle="dropdown" >
                        {{-- @if (Auth::guard('apprenant')->user()->photo})
                        <img alt="" src="{{Auth::guard('apprenant')->user()->photo}}">
                        @endif --}}
                        <span class="username">
                                {{Auth::guard('apprenant')->user()->nom}}
                        </span>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <li><a href="{{ url('/apprenants' . '/' . Auth::guard('apprenant')->user()->id) }}"><i class=" fa fa-suitcase"></i>Profile</a></li>
                        {{-- <li><a href="#"><i class="fa fa-cog"></i> Paramètres</a></li> --}}

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


                @if (Auth::guard("equipe")->check())
                <li>

                    <a data-toggle="dropdown" >
                        {{-- <img alt="" src="{{Auth::guard('equipe')->user()->avatar}}"> --}}
                        <span class="username">
                                {{Auth::guard('equipe')->user()->username}}
                        </span>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <li><a href="{{ url('/equipes' . '/' . Auth::guard('equipe')->user()->id) }}"><i class=" fa fa-suitcase"></i>Profile</a></li>
                        {{-- <li><a href="#"><i class="fa fa-cog"></i> Paramètres</a></li> --}}

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


                @if (Auth::guard("formateur")->check())
                <li>

                    <a data-toggle="dropdown" >
                        <img alt="" src="{{Auth::guard('formateur')->user()->avatar}}">
                        <span class="username">
                                {{Auth::guard('formateur')->user()->username}}
                        </span>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <li><a href="{{ url('/formateurs' . '/' . Auth::guard('formateur')->user()->id) }}"><i class=" fa fa-suitcase"></i>Profile</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i> Paramètres</a></li>

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


            </ul>
            <!--search & user info end-->
        </div>
        </header>
