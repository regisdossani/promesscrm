<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->

        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">

                <li>
                    <a class="active" href="{{ url('/equipe') }}">
                        <i class="fa fa-dashboard"></i>
                        <span>TABLEAU DE BOARD PROMESS</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/clients') }}">
                            <i class="fa fa-user"></i>
                            <span>Clients </span>
                    </a>
                </li>







@role('Resp-Pedagogique')
<li>
    <a href="{{ url('/candidats') }}">
            <i class="fa fa-bullhorn"></i>
            <span>Gestion des Candidats </span>
    </a>
</li>



<li  >
    <a href="{{ url('/apprenants') }}">
            <i class="fa fa-bullhorn"></i>
            <span>Gestion des Apprenants </span>
    </a>
</li>

<li>
    <a href="{{ url('/filieres') }}"
        <i class="fa fa-th"></i>
        <span>Gestion des Filieres</span>
    </a>
</li>

   {{--  <li>
        <a href="{{ url('/typeformations') }}">
            <i class="fa fa-tasks"></i>
            <span>Gestion des types de Formations</span>
        </a>
    </li> --}}
    <li>
        <a href="{{ url('fullcalendar') }}">
                <i class="fa fa-bullhorn"></i>
                <span>Calendrier</span>
        </a>
    </li>

<li>
    <a  class="active"  href="{{ url('/formateurs') }}">
            <i class="fa fa-bar-chart-o"></i>
            <span>Gestion des Formateurs</span>
    </a>
</li>

<li>
<a href="{{ url('/stages') }}">
        <i class="fa fa-bullhorn"></i>
        <span>Gestion des Stages </span>
</a>
</li>
{{-- <li  >
<a href="#">

    <span>Liste des Apprenants post-formation</span>
</a>
</li> --}}

@endrole
















           {{--  <li  >
                    <a href="{{ url('/partenaires') }}">
                            <i class="fa fa-book"></i>
                            <span>Gestion des partenaires </span>
                    </a>
            </li> --}}

       {{--      <li>
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
 --}}
{{--
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-angle-down"></i>
                        <span>Gestion stock</span>                    </a>
                    <ul class="sub">
                        <li><a href="{{ url('generation') }}">Gestion </a></li>
                        <li><a href="{{ url('types') }}">Types des produits </a></li>
                        <li><a href="{{ url('entres') }}">Les Entrées</a></li>
                        <li><a href="{{ url('sorties') }}">Les Sorties</a></li>

                    </ul>
                </li> --}}

                {{--

                <li  >
                    <a href="{{ url('/admin/documents') }}">
                            <i class="fa fa-bullhorn"></i>
                            <span>Nos Documents </span>
                        </a>
                    </li> --}}



                    {{--  <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>Charts</span>
                    </a>
                    <ul class="sub">
                        <li><a href="chartjs.html">Chart js</a></li>
                        <li><a href="flot_chart.html">Flot Charts</a></li>
                    </ul>
                </li> --}}
               {{--  <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>Maps</span>
                    </a>
                    <ul class="sub">
                        <li><a href="google_map.html">Google Map</a></li>
                        <li><a href="vector_map.html">Vector Map</a></li>
                    </ul>
                </li>
                {{-- <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-glass"></i>
                        <span>Extra</span>
                    </a>
                    <ul class="sub">
                        <li><a href="gallery.html">Gallery</a></li>
						<li><a href="404.html">404 Error</a></li>
                        <li><a href="registration.html">Registration</a></li>
                    </ul>
                </li> --}}
                {{-- <li>
                    <a href="/auth/login">
                        <i class="fa fa-user"></i>
                        <span>Connexion</span>
                    </a>
                </li>--}}

            </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
