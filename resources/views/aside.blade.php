<nav class="pcoded-navbar">
        <div class="navbar-wrapper">
            <div class="navbar-brand header-logo">
                <a href="index.html" class="b-brand">
                    <div class="b-bg">
                        <i class="feather icon-trending-up"></i>
                    </div>
                    <span class="b-title">ADAM - INCOFIN</span>
                </a>    
                <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
            </div>
            <div class="navbar-content scroll-div">
                <ul class="nav pcoded-inner-navbar">
                    <li class="nav-item pcoded-menu-caption">
                        <label>GESTION DE VENTAS</label>
                    </li>
                    @foreach($permisos as $p)
                    @if($p->nombrePermiso == "Usuarios" && $p->estado)
                        <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project"
                            class="nav-item pcoded-hasmenu">
                            <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                    class="feather icon-home"></i></span><span class="pcoded-mtext">Usuarios</span></a>
                            <ul class="pcoded-submenu">
                                <li class=""><a @click="menu=0">Usuarios</a></li>
                                <li class=""><a @click="menu=1">Persona</a></li>
                                <li class=""><a @click="menu=2">Roles</a></li>
                                <li class=""><a @click="menu=3">Permisos</a></li>
                                <li class=""><a @click="menu=4">Gestion Permisos</a></li>
                            </ul>
                        </li>
                    @endif
                    @if($p->nombrePermiso == "Productos" && $p->estado)
                        <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project"
                            class="nav-item pcoded-hasmenu">
                            <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                    class="feather icon-home"></i></span><span class="pcoded-mtext">Productos</span></a>
                            <ul class="pcoded-submenu">
                                <li class=""><a @click="menu=0">Nuevo Usuario</a></li>
                                <li class=""><a @click="menu=0">Permisos</a></li>
                            </ul>
                        </li>
                    @endif
                    @if($p->nombrePermiso == "Proveedores" && $p->estado)
                        <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project"
                            class="nav-item pcoded-hasmenu">
                            <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                    class="feather icon-home"></i></span><span class="pcoded-mtext">Proveedores</span></a>
                            <ul class="pcoded-submenu">
                                <li class=""><a @click="menu=0">Nuevo Usuario</a></li>
                                <li class=""><a @click="menu=0">Permisos</a></li>
                            </ul>
                        </li>
                    @endif
                    @if($p->nombrePermiso == "Clientes" && $p->estado)
                        <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project"
                            class="nav-item pcoded-hasmenu">
                            <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                    class="feather icon-home"></i></span><span class="pcoded-mtext">Clientes</span></a>
                            <ul class="pcoded-submenu">
                                <li class=""><a @click="menu=0">Nuevo Usuario</a></li>
                                <li class=""><a @click="menu=0">Permisos</a></li>
                            </ul>
                        </li>
                    @endif
                    @if($p->nombrePermiso == "Ventas" && $p->estado)
                        <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project"
                            class="nav-item pcoded-hasmenu">
                            <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                    class="feather icon-home"></i></span><span class="pcoded-mtext">Ventas</span></a>
                            <ul class="pcoded-submenu">
                                <li class=""><a @click="menu=0">Nuevo Usuario</a></li>
                                <li class=""><a @click="menu=0">Permisos</a></li>
                            </ul>
                        </li>
                    @endif
                    @if($p->nombrePermiso == "Compras" && $p->estado)
                        <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project"
                            class="nav-item pcoded-hasmenu">
                            <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                    class="feather icon-home"></i></span><span class="pcoded-mtext">Compras</span></a>
                            <ul class="pcoded-submenu">
                                <li class=""><a @click="menu=0">Nuevo Usuario</a></li>
                                <li class=""><a @click="menu=0">Permisos</a></li>
                            </ul>
                        </li>
                    @endif
                    @if($p->nombrePermiso == "Reportes" && $p->estado)
                        <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project"
                            class="nav-item pcoded-hasmenu">
                            <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                    class="feather icon-home"></i></span><span class="pcoded-mtext">Reportes</span></a>
                            <ul class="pcoded-submenu">
                                <li class=""><a @click="menu=0" v-on:click="ruta='Roles'">Nuevo Usuario</a></li>
                                <li class=""><a @click="menu=10">Permisos</a></li>
                            </ul>
                        </li>
                    @endif
                    @endforeach
                </ul>
            </div>
        </div>
<<<<<<< HEAD
        <div class="navbar-content scroll-div">
            <ul class="nav pcoded-inner-navbar">
                <li class="nav-item pcoded-menu-caption">
                    <label>Usuarios</label>
                </li>
                <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project"
                    class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                    <ul class="pcoded-submenu">
                        <li class=""><a @click="menu=0" v-on:click="ruta='Roles'">Roles</a></li>
                        <li class=""><a @click="menu=1" v-on:click="ruta='Usuarios'">Usuarios<span
                                    class="pcoded-badge label label-danger">NEW</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- [ navigation menu ] end -->
=======
    </nav>
    <!-- [ navigati
>>>>>>> edvincv
