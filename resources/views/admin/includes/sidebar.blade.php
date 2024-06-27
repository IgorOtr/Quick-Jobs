<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="{{ route('home') }}" class="navbar-brand mx-4 mb-3 d-flex justify-content-center w-100">
            <img style="width: 40px; height: 40px;" src="{{ asset('assets/img/simb-quick-laranja.png') }}" alt="">
            <h3 class="text-primary" style="margin:10px 0px 0px 10px;">Jobs</h3>
        </a>
        <div class="navbar-nav w-100">
            <a href="{{ route('home') }}" class="nav-item nav-link active"><i
                    class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="fa fa-check me-2"></i>Vagas</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('vagas') }}" class="dropdown-item">Ver Todas as Vagas</a>
                    <a href="{{ route('show-form-to-create') }}" class="dropdown-item">Adicionar Vagas</a>
                </div>
            </div>

            @if (count($vagas) > 0)

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                            class="fa fa-user me-2"></i>Candidatos</a>
                    <div class="dropdown-menu bg-transparent border-0">

                        @foreach ($vagas as $vaga)
                            <a href="{{ url('/Admin/Candidatos/' . $vaga->slug) }}"
                                class="dropdown-item">{{ $vaga->titulo }}</a>
                        @endforeach

                    </div>
                </div>

            @endif



        </div>
    </nav>
</div>
<!-- Sidebar End -->
