<!-- Navbar Start -->
<nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
    <a href="{{ route('home') }}" class="navbar-brand d-flex d-lg-none me-4">
        <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
    </a>
    <a href="#" class="sidebar-toggler flex-shrink-0">
        <i class="fa fa-bars"></i>
    </a>
    <div class="navbar-nav align-items-center ms-auto">
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <img class="rounded-circle me-lg-2" src="{{ asset('assets/img/simb-quick-branco.png') }}" alt=""
                    style="width: 40px; height: 40px;">
                <span class="d-none d-lg-inline-flex">Equipe RH Quick</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                <form action="{{ route('logout') }}" method="post">@csrf<button type="submit" class="dropdown-item"><i class="fa fa-arrow-right"></i>&nbsp;&nbsp;Sair</button></form>
            </div>
        </div>
    </div>
</nav>
<!-- Navbar End -->
