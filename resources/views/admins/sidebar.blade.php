
<!--sidebar start-->
<aside class="sidebar">
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="{{ url('/admin') }}">
                        <i class="fa fa-dashboard"></i>
                        <span>TABLEAU DE BOARD ADMIN</span>
                    </a>
                </li>
    <li class="sub-menu">
        <a href="javascript:;">
            <i class="fa fa-cog"></i>
            <span>Paramètres</span>
        </a>
        <ul class="sub">
            <li><a href="{{ url('/admin/roles') }}">Gestion des rôles</a></li>
            <li><a href="{{ url('/admin/permissions') }}">Gestion des permissions</a></li>
            <li><a href="{{ url('/classe') }}">Gestion des classes</a></li>
            <li><a href="{{ url('/filieres') }}"><span>Gestion des filières </span></a></li>
        </ul>
    </li>

    <li class="sub-menu">
        <a href="javascript:;">
            <i class="fa fa-tasks"></i>
            <span>Gestion Équipe Promess</span>
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
</aside>
