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
                <li class="dropdown">
                    <a data-toggle="dropdown">

                                <span class="username">
                                        {{Auth::guard('admin')->user()->username}}
                                </span>
                                <b class="caret"></b>
                            </a>
                                <ul class="dropdown-menu extended logout">
                                    <li><a href="{{ url('/admins' . '/' . Auth::guard('admin')->user()->id) }}"><i class=" fa fa-suitcase"></i>Profile</a></li>
                                    <li  class="dropdown"><a href="#"><i class="fa fa-cog"></i> Paramètres</a>
                                    <li><a href="{{ url('/calendrier') }}"><i class="fa fa-cog"></i> Calendrier</a></li>
                                    </li>
                                    <li><a class="fa fa-key" href="{{ route('logout') }}"
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
            <!-- user login dropdown end -->
            @if (Auth::guard("equipe")->check())
                <li class="dropdown">

                    <a data-toggle="dropdown">

                        <img alt="" src="{{Auth::guard('equipe')->user()->avatar}}">
                        <span class="username">
                                {{Auth::guard('equipe')->user()->username}}
                        </span>
                        <b class="caret"></b>

                    </a>
                    <ul class="dropdown-menu extended logout">
                        <li><a href="{{ url('/equipes' . '/' . Auth::guard('equipe')->user()->id) }}"><i class=" fa fa-suitcase"></i>Profile</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i> Paramètres</a></li>
                        {{-- <li><a href="{{ route('logout') }}"><i class="fa fa-key"></i> Déconnexion</a></li> --}}

                        <li><a class="fa fa-key" href="{{ route('logout') }}"
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
            <!-- user login dropdown end -->
            @if (Auth::guard("apprenant")->check())
            <li class="dropdown">

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
        <!-- user login dropdown end -->
        </ul>
        <!--search & user info end-->
    </div>
    </header>
    <!--header end-->
