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

            <div class="container-fluid p-5">
                <div class="row mb-5">
                    <div class="col-md-12 text-center">
                        <h2>CANDIDATOS - {{ $titulo_vaga[0]->titulo }}</h2>
                    </div>
                </div>

                <div class="row mb-3">

                    @if (count($candidatos) < 1)

                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="alert alert-danger text-center" role="alert">
                                Ainda <strong>não existem candidatos</strong> para esta vaga!
                            </div>
                        </div>
                        <div class="col-md-3"></div>

                    @endif

                    @foreach ($candidatos as $candidato)
                        <div class="col-md-4">
                            <div class="card" style="background-color: #191C24;">
                                <div class="card-body p-4 text-center">
                                    <h3 class="mb-3">{{ $candidato->nome }}</h3>
                                    <p>Cadastrado em:
                                        {{ \Carbon\Carbon::parse($candidato->created_at)->format('d/m/Y') }} ás
                                        {{ \Carbon\Carbon::parse($candidato->created_at)->format('H')-3 }}{{ \Carbon\Carbon::parse($candidato->created_at)->format(':i') }}</p>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        @if (!$candidato->file_name)
                                            <div class="col-md-12 mb-2">
                                                <button class="btn btn-primary w-100">Ver Informações</button>
                                            </div>
                                        @else
                                            <div class="col-md-6 mb-2">
                                                <button class="btn btn-primary w-100">Ver Informações</button>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <a href="{{ asset('assets/files/' . $candidato->file_name) }}"
                                                    target="_blank" class="btn btn-danger w-100">Baixar Currículo <i
                                                        class="fa fa-download"></i></a>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>



            @include('admin.includes.footer')
</body>

</html>
