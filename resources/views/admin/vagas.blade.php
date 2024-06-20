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

            @if (session('success'))

                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}</strong> Confira abaixo.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

            @endif

            <div class="container-fluid p-5">
                <div class="row mb-5">
                    <div class="col-md-12 text-center">
                        <h2>TODAS AS VAGAS</h2>
                    </div>
                </div>
                
                <div class="row mb-3">

                    @foreach ($vagas as $vaga)
                        <div class="col-md-3 mb-4">
                            <div class="card" style="background-color: #191c24;">
                                <div class="card-img-top"
                                    style="background-image: url({{ asset('assets/img/vagas/' . $vaga->img_capa) }}); padding: 170px; background-size: cover; background-repeat: no-repeat;">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $vaga->titulo }}</h5>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><a href="{{ url('/Admin/Candidatos/'.$vaga->slug) }}" target="_blank">Ver Candidatos</a></li>
                                    <li class="list-group-item"><a href="" data-bs-toggle="modal"
                                        data-bs-target="#moreInfoModal{{ $vaga->id }}">Informações da Vaga</a></li>
                                </ul>
                                <div class="card-body">
                                    <a href="{{ url('/Admin/Vagas/editar/'.$vaga->id) }}" class="card-link btn btn-warning px-4" data-bs-toggle="tooltip"
                                        data-bs-placement="top" data-bs-title="Editar"><i class="fa fa-edit"></i></a>

                                    <button type="button" data-bs-toggle="modal"
                                        data-bs-target="#deleteModal{{ $vaga->id }}"
                                        class="card-link btn btn-danger px-4"><i class="fa fa-trash"></i></button>

                                    {{-- <a href="#" class="card-link btn btn-danger" data-bs-toggle="tooltip"
                                        data-bs-placement="top" data-bs-title="Bloquear"><i class="fa fa-ban"></i></a> --}}
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="deleteModal{{ $vaga->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmar Ação</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Deseja mesmo excluir esta vaga?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancelar</button>
                                        <a href="{{ url('/Admin/Vagas/deletar/'.$vaga->id) }}" type="button" class="btn btn-primary">Excluir</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="moreInfoModal{{ $vaga->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="exampleModalLabel">Mais Informações</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <ul>
                                            <li class="mb-3" style="color: #ffffff; font-weight: 300;">
                                                <span style="font-weight: 600">Titulo:</span> {{ $vaga->titulo }}
                                            </li>
                                            <li class="mb-3" style="color: #ffffff; font-weight: 300;">
                                                <span style="font-weight: 600">Atividades</span>: {{ $vaga->atividades }}
                                            </li>
                                            <li class="mb-3" style="color: #ffffff; font-weight: 300;">
                                                <span style="font-weight: 600">Requisitos:</span> {{ $vaga->requisitos }}
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary"
                                            data-bs-dismiss="modal">Fechar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>



            @include('admin.includes.footer')

            <script>
                const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
                const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
            </script>
</body>

</html>
