<header>
    <div class="container-fluid p-0">
        <div class="header-card card-1 d-flex align-items-center justify-content-between px-4">
            <div>
                <a href="{{route('index')}}"><img src="{{asset('images/logo.png')}}" alt="Logo" class="logo"></a>
            </div>
            <div class="d-flex align-items-center justify-between">
            </div>
        </div>
        <hr style="border: 1px solid #df7f12; width: 100%;"/>

        <div class="header-card card-2">
            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid d-flex align-items-center justify-content-between">
                     <!-- Bouton responsive -->
                     <button class="navbar-toggler ms-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav" style="justify-content: center">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{route('index')}}">ACCUEIL</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle " href="services.html" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    SERVICES
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{route('service.gdas')}}">Gestion des accès et sécurité</a></li>
                                    <li><a class="dropdown-item" href="{{route('service.smp')}}">Surveillance des Menaces</a></li>
                                    <li><a class="dropdown-item" href="{{route('service.formation')}}">Formation en Cybersécurité</a></li>
                                    <li><a class="dropdown-item" href="{{route('service.infogerance')}}">Infogérance</a></li>
                                    <li><a class="dropdown-item" href="{{route('service.devweb')}}">Développement de site web et solutions informatiques</a></li>
                                    <li><a class="dropdown-item" href="{{route('service.iwmp')}}">Intégration web et mobile performante</a></li>
                                    <li><a class="dropdown-item" href="{{route('service.architecture')}}">Architecture réseau</a></li>
                                    <li><a class="dropdown-item" href="{{route('service.gpi')}}">Gestion de projet informatique</a></li>
                                    <li><a class="dropdown-item" href="{{route('service.cdn')}}">Conseil et droit numérique</a></li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('actualite') ? 'active' : '' }}" href="{{ route('actualite') }}">ACTUALITÉS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('equipe') ? 'active' : '' }}" href="{{ route('equipe') }}">NOTRE ÉQUIPE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">CONTACTS</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        </div>
        <hr style="border: 1px solid #df7f12; width: 100%;"/>
    </div>
</header>
