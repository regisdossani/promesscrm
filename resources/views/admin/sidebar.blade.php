<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="index.html">
                        <i class="fa fa-dashboard"></i>
                        <span>TABLEAU DE BOARD</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Gestion stock</span>
                    </a>
                    <ul class="sub">
						<li><a href="typography.html">Inventaire</a></li>
						{{-- <li><a href="glyphicon.html">Enrégistrem</a></li>
                        <li><a href="grids.html">Grids</a></li> --}}
                    </ul>
                </li>
                <li  class="{{ Request::segment(2) == "users"?"active":"" }}">
                <a href="{{ url('/admin/users') }}">
                        <i class="fa fa-bullhorn"></i>
                        <span>Utilisateurs </span>
                    </a>
                </li>


                <li>
                    <a href="fontawesome.html">
                        <i class="fa fa-bullhorn"></i>
                        <span>Employés </span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Équipe Promess</span>
                    </a>
                    <ul class="sub">
                        <li><a href="basic_table.html">Employés </a></li>
                        <li><a href="responsive_table.html">Stagiaires</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-tasks"></i>
                        <span>LMS</span>
                    </a>
                    <ul class="sub">
                        <li><a href="form_component.html">Apprenants</a></li>
                        <li><a href="form_validation.html">Formateurs</a></li>
                        <li><a href="dropzone.html">Proffessionnels</a></li>
                        <li><a href="form_component.html">Chantiers école</a></li>

                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-envelope"></i>
                        <span>Mail </span>
                    </a>
                    <ul class="sub">
                        <li><a href="mail.html">Inbox</a></li>
                        <li><a href="mail_compose.html">Compose Mail</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>Charts</span>
                    </a>
                    <ul class="sub">
                        <li><a href="chartjs.html">Chart js</a></li>
                        <li><a href="flot_chart.html">Flot Charts</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>Maps</span>
                    </a>
                    <ul class="sub">
                        <li><a href="google_map.html">Google Map</a></li>
                        <li><a href="vector_map.html">Vector Map</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-glass"></i>
                        <span>Extra</span>
                    </a>
                    <ul class="sub">
                        <li><a href="gallery.html">Gallery</a></li>
						<li><a href="404.html">404 Error</a></li>
                        <li><a href="registration.html">Registration</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/auth/login">
                        <i class="fa fa-user"></i>
                        <span>Connexion</span>
                    </a>
                </li>
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
