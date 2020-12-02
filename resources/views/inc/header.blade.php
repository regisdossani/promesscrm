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

            <li class="dropdown">
                @if (Auth::guard("admin")->check())
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                    <img alt="" src="images/2.png">
                    <span class="username">

                              {{Auth::guard('admin')->user()->username}}

                        {{-- @if (Auth::guard("equipe")->check())
                        {{Auth::guard('equipe')->user()->username}}
                        @endif
                        @if (Auth::guard("apprenant")->check())
                              {{Auth::guard('apprenant')->user()->username}}
                        @endif
                        @if (Auth::guard("formateur")->check())
                              {{Auth::guard('formateur')->user()->username}}
                        @endif --}}
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

                @endif
            </li>
            <!-- user login dropdown end -->

            <li class="dropdown">
            @if (Auth::guard("equipe")->check())
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                    <img alt="" src="images/2.png">
                    <span class="username">

                              {{Auth::guard('equipe')->user()->username}}

                        {{-- @if (Auth::guard("equipe")->check())
                        {{Auth::guard('equipe')->user()->username}}
                        @endif
                        @if (Auth::guard("apprenant")->check())
                              {{Auth::guard('apprenant')->user()->username}}
                        @endif
                        @if (Auth::guard("formateur")->check())
                              {{Auth::guard('formateur')->user()->username}}
                        @endif --}}
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
                @endif
            </li>
            <!-- user login dropdown end -->

        </ul>
        <!--search & user info end-->
    </div>
    </header>
    <!--header end-->
