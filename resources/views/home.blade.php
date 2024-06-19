@include('includes.head')

<body>

    <section style="background-image: url({{ asset('assets/img/banner.jpg') }})" class="banner-section mb-5">
        <header class="navbar navbar-expand-md navbar-transparent d-print-none">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
                    aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal p-3 ">
                    <a href=".">
                        <img src="{{ asset('assets/img/logo-quick-branca.png') }}" width="300" height="32"
                            alt="Tabler" class="navbar-brand-image">
                    </a>
                </h1>
            </div>
        </header>

        <div class="banner-text">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-start">
                        <h1>
                            Seja Bem-Vindo!
                        </h1>
                        <h1>
                            Confira já, nossas Vagas!
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 text-center">
                    <h1 class="sec-title">Vagas Abertas</h1>
                    <p class="sec-subtitle">Confira abaixo todas as vagas disponíveis na empresa. Caso não estiver
                        encontrando o cargo desejado, cadastre seu currículo em nosso <a href="#">Banco de
                            Talentos</a>.</p>
                </div>
                <div class="col-md-3"></div>

            </div>
        </div>
    </section>

    <section class="mb-5">
        <div class="container-xl mb-5">
            <div class="card">
                <div class="card-body">
                    <div class="accordion" id="accordion-example">


                        @foreach ($vagas as $vaga)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading-1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-{{ $vaga->id }}" aria-expanded="false">
                                        {{ $vaga->titulo }}
                                    </button>
                                </h2>
                                <div id="collapse-{{ $vaga->id }}" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion-example" style="">
                                    <div class="accordion-body pt-0">
                                        <ul>
                                            <li class="mb-4">
                                                <strong>Atividades</strong>
                                                <ul>
                                                    <li>{{ $vaga->atividades }}</li>
                                                </ul>
                                            </li>
                                            <li class="mb-4">
                                                <strong>Requisitos</strong>
                                                <ul>
                                                    <li>{{ $vaga->requisitos }}</li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <div class="w-100 text-end">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#modalVaga{{ $vaga->id }}">Quero me
                                                candidatar</button>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal modal-blur fade" id="modalVaga{{ $vaga->id }}" tabindex="-1"
                                style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                    <form class="w-100" action="{{ route('cadastrar-candidato') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-content" style="background-color: #ffffff;">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Vaga: {{ $vaga->titulo }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row mb-3 text-center    ">
                                                    <h4>Preencha o formulário corretamente</h4>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-4 mb-3">
                                                        <label class="form-label">Nome Completo <span style="color: red;">*</span></label>
                                                        <input type="text" class="form-control" name="nome"
                                                            placeholder="Nome:">
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label class="form-label">Email <span style="color: red;">*</span></label>
                                                        <input type="text" class="form-control" name="email"
                                                            placeholder="Email:">
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label class="form-label">Telefone <span style="color: red;">*</span></label>
                                                        <input type="text" name="telefone" class="form-control"
                                                            placeholder="(00) 0000-0000">
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Data de Nascimento <span style="color: red;">*</span></label>
                                                        <input type="date" name="data_nasc" class="form-control">
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Vaga Pretendida</label>
                                                        <input type="text" class="form-control"
                                                            value="{{ $vaga->titulo }}" readonly>
                                                        <input type="hidden" value="{{ $vaga->id }}">
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <label class="form-label">Resumo Profissional <span style="color: red;">*</span></label>
                                                        <textarea name="resumo_prof" class="form-control" rows="6"
                                                            placeholder="Conte um pouco sobre suas habilidades e sua jornada profissional até aqui..."></textarea>
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <label class="form-label">Resumo Acadêmico <span style="color: red;">*</span></label>
                                                        <textarea name="resumo_acad" class="form-control" rows="6"
                                                            placeholder="Conte um pouco sobre sua jornada acadêmica..."></textarea>
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <div class="form-label">Envie o seu currículo</div>
                                                        <input type="file" name="file_name" class="form-control">
                                                        <span>Apenas arquivos .pdf, .doc ou .docx <span style="color: red;">*</span></span>
                                                      </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn me-auto"
                                                    data-bs-dismiss="modal">Fechar</button>
                                                <button type="submit" class="btn btn-primary"
                                                    data-bs-dismiss="modal">Enviar Candidatura</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer footer-transparent d-print-none">
        <div class="container-xl">
            <div class="row text-center align-items-center flex-row-reverse">
                <div class="col-lg-auto ms-lg-auto">
                    <ul class="list-inline list-inline-dots mb-0">
                        <li class="list-inline-item">
                            <p>"Onde conectar pessoas é o nosso compromisso"</p>
                        </li>

                    </ul>
                </div>
                <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                    <ul class="list-inline list-inline-dots mb-0">
                        <li class="list-inline-item">
                            Copyright © 2024
                            <a href="https://quick.com.br" target="_blank" class="link-secondary">Quick.com.br</a>.
                            Todos os diretos Reservados.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


</body>

</html>
