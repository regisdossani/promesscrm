<!--sidebar start-->
<aside class="navbar navbar-expand-sm" >
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->

        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">

                <li>
                    <a class="active" href="{{ url('/admin') }}">
                        <i class="fa fa-dashboard"></i>
                        <span>TABLEAU DE BORD</span>
                    </a>
                </li>


                {{-- <li  class="{{ Request::segment(2) == "users"?"active":"" }}"> --}}
            <li>
                <a  class="active"  href="#">
                        <i class="fa fa-bullhorn"></i>
                        <span>Gestion des Apprenants </span>
                </a>
            </li>
            <li>
                <a  class="active"  href="#">
                        <i class="fa fa-bullhorn"></i>
                        <span>Gestion des Formateurs</span>
                </a>
            </li>

            <li>
                <a  class="active"  href="#">
                        <i class="fa fa-bar-chart-o"></i>
                        <span>Gestion des Proffessionnels</span>
                </a>
            </li>




                {{-- <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Gestion de l’équipe PROMESS</span>
                    </a>
                    <ul class="sub">
                        <li  >
                            <a href="{{ url('/admin/employes') }}">
                                    <i class="fa fa-bullhorn"></i>
                                    <span>Employés </span>
                                </a>
                            </li>
                        <li><a href="#">Stagiaires</a></li>
                        <li  >
                            <a href="{{ url('/admin/cities') }}">
                                    <i class="fa fa-bullhorn"></i>
                                    <span>Les villes </span>
                                </a>
                            </li>
                            <li  >
                                <a href="{{ url('/admin/countries') }}">
                                        <i class="fa fa-bullhorn"></i>
                                        <span>Les pays </span>
                                    </a>
                                </li>
                                <li  >
                                    <a href="{{ url('/admin/genders') }}">
                                            <i class="fa fa-bullhorn"></i>
                                            <span>Les genres </span>
                                        </a>
                                    </li>
                    </ul>
                </li> --}}
                {{-- <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-tasks"></i>
                        <span>Gestion des enseignements</span>
                    </a>
                    <ul class="sub">
                        <li><a href="#">Gestion des Apprenants</a></li>

                        <li><a href="#">Gestion des Proffessionnels</a></li>
                        <li><a href="#">Gestion des Chantiers école</a></li>
                        <li><a href="#">Gestion du post-formation</a></li>
                    </ul>
                </li> --}}

                {{-- <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Gestion stock</span>
                    </a>
                    <ul class="sub">
						<li><a href="#">Inventaire</a></li>
						{{-- <li><a href="glyphicon.html">Enrégistrem</a></li>
                        <li><a href="grids.html">Grids</a></li>
                    </ul>
                </li> --}}

                {{-- <li>
                    <a href="#">
                        <i class="fa fa-bullhorn"></i>
                        <span>Gestion des Personnes Ressources </span>
                    </a>
                </li>

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
