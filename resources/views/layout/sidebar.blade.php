<aside class="sidebar sidebar-default sidebar-white sidebar-base navs-rounded-all">
    <div class="sidebar-header d-flex align-items-center justify-content-start">
        <a href="/" class="navbar-brand">
            <!--Logo start-->
            <!--logo End-->

            <!--Logo start-->
            <div class="logo-main">
                <div class="logo-normal">
                    <svg class=" icon-30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor" />
                        <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor" />
                        <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor" />
                        <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor" />
                    </svg>
                </div>
                <div class="logo-mini">
                    <svg class=" icon-30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor" />
                        <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor" />
                        <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor" />
                        <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor" />
                    </svg>
                </div>
            </div>
            <!--logo End-->

            <h4 class="logo-title">SportCotiza</h4>
        </a>
        <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
            <i class="icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.25 12.2744L19.25 12.2744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </i>
        </div>
    </div>
    <div class="sidebar-body pt-0 data-scrollbar">
        <div class="sidebar-list">
            <!-- Sidebar Menu Start -->
            <ul class="navbar-nav iq-main-menu" id="sidebar-menu">
                <li class="nav-item static-item">
                    <a class="nav-link static-item disabled" href="/" tabindex="-1">
                        <span class="default-icon">Inicio</span>
                        <span class="mini-icon">-</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}"" aria-current=" page" href="/">
                        <i class="bi bi-bar-chart-fill">
                            <span class="item-name">Dashboard</span>
                        </i>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="" target="_blank">
                        <i class="bi bi-person-fill">
                            <span class="item-name">Usuarios</span>
                        </i>

                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="" target="_blank">
                        <i class="bi bi-person-fill-gear">
                            <span class="item-name">Roles</span>
                        </i>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link disabled" aria-current="page" href="/inicio/index">
                        <i class="bi bi-clipboard2-fill">
                            <span class="item-name">Gestionar cotización</span>
                        </i>
                    </a>
                </li>
                <li>
                    <hr class="hr-horizontal">
                </li>
                <li class="nav-item static-item">
                    <a class="nav-link static-item disabled" href="#" tabindex="-1">
                        <span class="default-icon">Catálogos</span>
                        <span class="mini-icon">-</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('pagina/index') ? 'active' : '' }}" " href=" /pagina/index">
                        <i class="bi bi-bag-fill">
                            <span class="item-name">Productos</span>
                        </i>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href=" /pagina/index">
                        <i class="bi bi-truck-front-fill">
                            <span class="item-name">Proveedores</span>
                        </i>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('cliente/index') ? 'active' : '' }}" " href=" /cliente/index">
                        <i class="bi bi-people-fill">
                            <span class="item-name">Clientes</span>
                        </i>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('cotizaciones/index') ? 'active' : '' }}" " href=" /cotizaciones/index">
                        <i class="bi bi-book-half">
                            <span class="item-name">Cotizaciones</span>
                        </i>

                    </a>
                </li>
                <li>
                    <hr class="hr-horizontal">
                </li>

            </ul>
            <!-- Sidebar Menu End -->
        </div>
    </div>
    <div class="sidebar-footer"></div>
</aside>