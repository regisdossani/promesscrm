
<!--sidebar start-->
<aside>
    <div id="sidebar" class="collapse navbar-collapse">
        <!-- sidebar menu start-->

        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">

                @if (Auth::guard('equipe')->check())
                <li>
                    <a class="active" href="{{ url('/equipe') }}">
                        <i class="fa fa-dashboard"></i>
                        <span>TABLEAU DE BOARD EQUIPE</span>
                    </a>
                </li>
                @endif

                @if (Auth::guard('admin')->check())
                <li>
                    <a class="active" href="{{ url('/admin') }}">
                        <i class="fa fa-home"></i>
                        <span>TABLEAU DE BOARD ADMIN</span>
                    </a>
                </li>
                @endif

                @role('superadmin')
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-cog"></i>
                        <span>Paramètres</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ url('/admin/roles') }}">Gestion des rôles</a></li>
                        <li><a href="{{ url('/admin/permissions') }}">Gestion des permissions</a></li>
                        <li><a href="{{ url('/classe') }}">Gestion des classes</a></li>
                        <li><a href="{{ url('/typeformations') }}"><span>Les types de Formations</span></a> </li>
                        <li><a href="{{ url('/formations') }}"><span>Gestion les Formations</span></a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-tasks"></i>
                        <span>Personnel Admini </span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ url('/equipes') }}">Gestion des membres</a></li>
                        <li><a href="{{ url('/eqattendance') }}">Suivis horaires</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ url('/clients') }}">
                        <i class="fa fa-user"></i>
                        <span>Gestion des Clients </span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/professionnels') }}">
                        <i class="fa fa-th"></i>
                        <span>Gestion des professionnels </span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/persressources') }}">
                        <i class="fa fa-bullhorn"></i>
                        <span>Gestion des personnes </span>
                        <span>ressources </span>
                    </a>
                </li>
                @endrole

                @hasanyrole('Resp-Pedagogique|superadmin')
                <li>
                    <a href="{{ url('/candidats') }}">
                        <i class="fa fa-bullhorn"></i>
                        <span>Gestion des candidats </span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Gestion des Apprenants</span>
                    </a>
                    <ul class="sub">

                        <li>
                            <a href="{{ url('/apprenants') }}">
                                <i class="fa fa-tasks"></i>
                                <span>Gerer Les Apprenants</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/stages') }}">
                                <i class="fa fa-tasks"></i>
                                <span>Gestion des Stages</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/stagiaires') }}">
                                <i class="fa fa-tasks"></i>
                                <span>Gestion des Stagiaires</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/calendrier') }}">
                        <i class="nav-icon fa-fw fa fa-calendar">
                        </i>
                        {{ trans('Calendrier') }}
                    </a>
                </li>
                @endrole
            </ul>
        </div>
    </div>
</aside>
