@include('admin.includes.head')

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        @include('admin.includes.sidebar')


        <!-- Content Start -->
        <div class="content">

            @include('admin.includes.navbar')

            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-check-circle fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Vagas Abertas</p>
                                <h6 style="font-size: 22px;" class="mb-0 text-end">{{ count($vagas) }}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-user fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Cadidatos</p>
                                <h6 class="mb-0 text-end" style="font-size: 22px;">{{ count($candidatos) }}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-6">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-file fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Currículos Recebidos</p>
                                <h6 style="font-size: 22px;" class="mb-0 text-end">{{ count($curriculos) }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->


            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-secondary rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h6 class="mb-0">Últimos Candidatos</h6>
                            </div>

                            @foreach ($candidatos as $candidato)
                                <div class="d-flex align-items-center border-bottom py-3">
                                    <i class="fa fa-user" style="font-size: 30px;"></i>
                                    <div class="w-100 ms-3">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h6 class="mb-0">{{ $candidato->nome }}</h6>
                                            <small>{{ \Carbon\Carbon::parse($candidato->created_at)->format('d/m/Y') }}
                                                ás
                                                {{ \Carbon\Carbon::parse($candidato->created_at)->format('H') - 3 }}{{ \Carbon\Carbon::parse($candidato->created_at)->format(':i') }}</small>
                                        </div>
                                        <span>{{ substr($candidato->resumo_prof, 0, 30) . '...' }}</span>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-secondary rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Vagas Abertas Recentemente</h6>
                                <a href="{{ route('vagas') }}">Ver Todas</a>
                            </div>


                            @foreach ($vagas as $vaga)

                                <div class="d-flex align-items-center border-bottom py-2">
                                    <img width="40" src="{{ asset('assets/img/vagas/'.$vaga->img_capa) }}" alt="">
                                    <div class="w-100 ms-3">
                                        <div class="d-flex w-100 align-items-center justify-content-between">
                                            <span>{{ $vaga->titulo }}</span>
                                        </div>
                                    </div>
                                </div>

                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
            <!-- Widgets End -->


            @include('admin.includes.footer')
</body>

</html>
