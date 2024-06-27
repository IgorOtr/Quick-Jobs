@include('includes.head')

<body>

    @if (isset($success))
        <div class="modal modal-blur fade show" id="modal-success" tabindex="-1" role="dialog" aria-modal="true"
            style="display: block;">
            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                <div class="modal-content" style="background-color: #ffffff;">
                    <a href="/" type="button" class="btn-close" aria-label="Close"></a>
                    <div class="modal-status bg-success"></div>
                    <div class="modal-body text-center py-4">
                        <!-- Download SVG icon from http://tabler-icons.io/i/circle-check -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-green icon-lg" width="24"
                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                            <path d="M9 12l2 2l4 -4"></path>
                        </svg>
                        <h3>{{ $success }}</h3>
                    </div>
                    <div class="modal-footer">
                        <div class="w-100">
                            <div class="row">
                                <div class="col"><a href="/" class="btn btn-success w-100">
                                        Voltar
                                    </a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if (isset($error))
        <div class="modal modal-blur fade show" id="modal-danger" tabindex="-1" role="dialog" aria-modal="true"
            style="display: block;">
            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                <div class="modal-content" style="background-color: #ffffff;">
                    <a href="/" type="button" class="btn-close"></a>
                    <div class="modal-status bg-danger"></div>
                    <div class="modal-body text-center py-4">
                        <!-- Download SVG icon from http://tabler-icons.io/i/alert-triangle -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-danger icon-lg" width="24"
                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M12 9v4"></path>
                            <path
                                d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z">
                            </path>
                            <path d="M12 16h.01"></path>
                        </svg>
                        <h3>{{ $error }}</h3>
                    </div>
                    <div class="modal-footer">
                        <div class="w-100">
                            <div class="row">
                                <div class="col"><a href="/" class="btn btn-danger w-100">
                                        Voltar
                                    </a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if ($errors->any())
        <div class="modal modal-blur fade show" id="modal-danger" tabindex="-1" role="dialog" aria-modal="true"
            style="display: block;">
            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                <div class="modal-content" style="background-color: #ffffff;">
                    <a href="/" type="button" class="btn-close"></a>
                    <div class="modal-status bg-danger"></div>
                    <div class="modal-body text-center py-4">
                        <!-- Download SVG icon from http://tabler-icons.io/i/alert-triangle -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-danger icon-lg" width="24"
                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M12 9v4"></path>
                            <path
                                d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z">
                            </path>
                            <path d="M12 16h.01"></path>
                        </svg>
                        <ul style="list-style: none">
                            @foreach ($errors->all() as $error)
                                <li>
                                    <h3>{{ $error }}</h3>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <div class="w-100">
                            <div class="row">
                                <div class="col"><a href="/" class="btn btn-danger w-100">
                                        Voltar
                                    </a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <section style="background-image: url({{ asset('assets/img/banner.jpg') }})" class="banner-section mb-5">
        <header class="navbar navbar-expand-md navbar-transparent d-print-none">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false"
                    aria-label="Toggle navigation">
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
                        encontrando o cargo desejado, fiqeu de olho em nossas redes sociais, como <a
                            href="https://www.linkedin.com/company/grupoquicknet/mycompany/"
                            target="_blank">LinkedIn</a> e <a href="https://www.instagram.com/quick.com.br/"
                            target="_blank">Instagram</a>.</p>
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
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse-{{ $vaga->id }}"
                                        aria-expanded="false">
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
                                    <form class="w-100" action="{{ route('cadastrar-candidato') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-content" style="background-color: #ffffff;">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Vaga: {{ $vaga->titulo }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row mb-3 text-center">
                                                    <h3>Preencha o formulário corretamente</h3>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-4 mb-3">
                                                        <label class="form-label">Nome Completo <span
                                                                style="color: red;">*</span></label>
                                                        <input type="text" class="form-control" name="nome"
                                                            placeholder="Nome:" required>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label class="form-label">Email <span
                                                                style="color: red;">*</span></label>
                                                        <input type="email" class="form-control" name="email"
                                                            placeholder="Email:" required>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label class="form-label">Telefone <span
                                                                style="color: red;">*</span></label>
                                                        <input type="number" name="telefone" class="form-control"
                                                            placeholder="(00) 0000-0000" required>
                                                        <span style="color: red; font-size: 10px;">Apenas
                                                            números</span>

                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Data de Nascimento <span
                                                                style="color: red;">*</span></label>
                                                        <input type="date" name="data_nasc" class="form-control" required>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Vaga Pretendida</label>
                                                        <input type="text" class="form-control"
                                                            value="{{ $vaga->titulo }}" readonly>
                                                        <input type="hidden" name="titulo_vaga"
                                                            value="{{ $vaga->titulo }}">
                                                        <input type="hidden" name="slug_vaga"
                                                            value="{{ $vaga->slug }}">
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <label class="form-label">Resumo Profissional <span
                                                                style="color: red;">*</span></label>
                                                        <textarea name="resumo_prof" class="form-control" rows="6"
                                                            placeholder="Conte um pouco sobre suas habilidades e sua jornada profissional até aqui..." required></textarea>
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <label class="form-label">Resumo Acadêmico <span
                                                                style="color: red;">*</span></label>
                                                        <textarea name="resumo_acad" class="form-control" rows="6"
                                                            placeholder="Conte um pouco sobre sua jornada acadêmica..." required></textarea>
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <div class="form-label">Envie o seu currículo</div>
                                                        <input type="file" name="file_name" class="form-control">
                                                        <span>Somente arquivos .pdf <span
                                                                style="color: red;">*</span></span>
                                                    </div>
                                                </div>
                                                <div class="row mb-3 text-center">
                                                    <h3>
                                                        Para deixar seu cadastro mais completo, responda as
                                                        perguntas abaixo para conhecermos um pouquinho mais sobre sua
                                                        personalidade:
                                                    </h3>
                                                </div>

                                                <div>
                                                    
                                                    <div class="card p-3 mb-5 shadow rounded">
                                                        <div class="form-label">Eu sou...</div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q1"
                                                                    type="radio" value="I" required>
                                                                <span class="form-check-label">I - Idealista, criativo e
                                                                    visionário</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q1"
                                                                    type="radio" value="C" required>
                                                                <span class="form-check-label">C - Divertido, espiritual e
                                                                    benéfico</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q1"
                                                                    type="radio" value="O" required>
                                                                <span class="form-check-label">O - Confiável, meticuloso e
                                                                    previsível</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q1"
                                                                    type="radio" value="A" required>
                                                                <span class="form-check-label">A - Focado, determinado e
                                                                    persistente</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="card p-3 mb-5 shadow rounded">
                                                        <div class="form-label">Eu gosto de...</div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q2"
                                                                    type="radio" value="A" required>
                                                                <span class="form-check-label">A - Ser piloto</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q2"
                                                                    type="radio" value="C" required>
                                                                <span class="form-check-label">C - Conversar com os
                                                                    passageiros</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q2"
                                                                    type="radio" value="O" required>
                                                                <span class="form-check-label">O - Planejar a viagem</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q2"
                                                                    type="radio" value="I" required>
                                                                <span class="form-check-label">I - Explorar novas
                                                                    rotas</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="card p-3 mb-5 shadow rounded">
                                                        <div class="form-label">Se você quiser se dar bem comigo...</div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q3"
                                                                    type="radio" value="I" required>
                                                                <span class="form-check-label">I - Me dê liberdade</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q3"
                                                                    type="radio" value="O" required>
                                                                <span class="form-check-label">O - Me deixe saber sua
                                                                    expectativa</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q3"
                                                                    type="radio" value="A" required>
                                                                <span class="form-check-label">A - Lidere, siga ou saia do
                                                                    caminho</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q3"
                                                                    type="radio" value="C" required>
                                                                <span class="form-check-label">C - Seja amigável, carinhoso
                                                                    e compreensivo</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="card p-3 mb-5 shadow rounded">
                                                        <div class="form-label">Para conseguir bons resultados é preciso...
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q4"
                                                                    type="radio" value="I" required>
                                                                <span class="form-check-label">I - Ter incertezas</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q4"
                                                                    type="radio" value="O" required>
                                                                <span class="form-check-label">O - Controlar o
                                                                    essencial</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q4"
                                                                    type="radio" value="C" required>
                                                                <span class="form-check-label">C - Diversão e
                                                                    celebração</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q4"
                                                                    type="radio" value="A" required>
                                                                <span class="form-check-label">A - Planejar e obter
                                                                    recursos</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="card p-3 mb-5 shadow rounded">
                                                        <div class="form-label">Eu me divirto quando...</div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q5"
                                                                    type="radio" value="A" required>
                                                                <span class="form-check-label">A - Estou me
                                                                    exercitando</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q5"
                                                                    type="radio" value="I" required>
                                                                <span class="form-check-label">I - Tenho novidades</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q5"
                                                                    type="radio" value="C" required>
                                                                <span class="form-check-label">C - Estou com os
                                                                    outros</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q5"
                                                                    type="radio" value="O" required>
                                                                <span class="form-check-label">O - Determino as
                                                                    regras</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="card p-3 mb-5 shadow rounded">
                                                        <div class="form-label">Eu penso que...</div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q6"
                                                                    type="radio" value="C" required>
                                                                <span class="form-check-label">C - Unidos venceremos,
                                                                    divididos perderemos</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q6"
                                                                    type="radio" value="V" required>
                                                                <span class="form-check-label">A - O ataque é melhor que a
                                                                    defesa</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q6"
                                                                    type="radio" value="I" required>
                                                                <span class="form-check-label">I - É bom ser manso, mas
                                                                    andar com um porrete</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q6"
                                                                    type="radio" value="O" required>
                                                                <span class="form-check-label">O - Um homem prevenido vale
                                                                    por dois</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="card p-3 mb-5 shadow rounded">
                                                        <div class="form-label">Minha preocupação é...</div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q7"
                                                                    type="radio" value="I" required>
                                                                <span class="form-check-label">I - Gerar a ideia
                                                                    global</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q7"
                                                                    type="radio" value="C" required>
                                                                <span class="form-check-label">C - Fazer com que as pessoas
                                                                    gostem</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q7"
                                                                    type="radio" value="O" required>
                                                                <span class="form-check-label">O - Fazer com que
                                                                    funcione</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q7"
                                                                    type="radio" value="A" required>
                                                                <span class="form-check-label">A - Fazer com que
                                                                    aconteça</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="card p-3 mb-5 shadow rounded">
                                                        <div class="form-label">Eu prefiro...</div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q8"
                                                                    type="radio" value="I" required>
                                                                <span class="form-check-label">I - Perguntas a
                                                                    respostas</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q8"
                                                                    type="radio" value="O" required>
                                                                <span class="form-check-label">O - Ter todos os
                                                                    detalhes</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q8"
                                                                    type="radio" value="A" required>
                                                                <span class="form-check-label">A - Vantagens ao meu
                                                                    favor</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q8"
                                                                    type="radio" value="C" required>
                                                                <span class="form-check-label">C - Que todos tenham a
                                                                    chance de ser ouvidos</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="card p-3 mb-5 shadow rounded">
                                                        <div class="form-label">Eu gosto de...</div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q9"
                                                                    type="radio" value="A" required>
                                                                <span class="form-check-label">A - Fazer progresso</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q9"
                                                                    type="radio" value="C" required>
                                                                <span class="form-check-label">C - Construir
                                                                    memórias</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q9"
                                                                    type="radio" value="O" required>
                                                                <span class="form-check-label">O - Fazer sentido</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q9"
                                                                    type="radio" value="I" required>
                                                                <span class="form-check-label">I - Tornar as pessoas
                                                                    confortáveis</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="card p-3 mb-5 shadow rounded">
                                                        <div class="form-label">Eu gosto de chegar...</div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q10"
                                                                    type="radio" value="A" required>
                                                                <span class="form-check-label">A - Na frente</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q10"
                                                                    type="radio" value="C" required>
                                                                <span class="form-check-label">C - Junto</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q10"
                                                                    type="radio" value="O" required>
                                                                <span class="form-check-label">O - Na hora</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q10"
                                                                    type="radio" value="I" required>
                                                                <span class="form-check-label">I - Em outro lugar</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="card p-3 mb-5 shadow rounded">
                                                        <div class="form-label">Um ótimo dia para mim é quando...</div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q11"
                                                                    type="radio" value="A" required>
                                                                <span class="form-check-label">A - Consigo fazer muitas
                                                                    coisas</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q11"
                                                                    type="radio" value="C" required>
                                                                <span class="form-check-label">C - Me divirto com meus
                                                                    amigos</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q11"
                                                                    type="radio" value="O" required>
                                                                <span class="form-check-label">O - Tudo segue conforme o
                                                                    planejado</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q11"
                                                                    type="radio" value="I" required>
                                                                <span class="form-check-label">I - Desfruto coisas
                                                                    novas</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="card p-3 mb-5 shadow rounded">
                                                        <div class="form-label">Eu vejo a morte como...</div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q12"
                                                                    type="radio" value="A" required>
                                                                <span class="form-check-label">A - Uma grande aventura
                                                                    misteriosa</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q12"
                                                                    type="radio" value="C" required>
                                                                <span class="form-check-label">C - Oportunidade para rever
                                                                    falecidos</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q12"
                                                                    type="radio" value="O" required>
                                                                <span class="form-check-label">O - Um modo de receber
                                                                    recompensas</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q12"
                                                                    type="radio" value="I" required>
                                                                <span class="form-check-label">I - Algo que sempre chega
                                                                    muito cedo</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="card p-3 mb-5 shadow rounded">
                                                        <div class="form-label">Minha filosofia de vida é...</div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q13"
                                                                    type="radio" value="A" required>
                                                                <span class="form-check-label">A - Eu acredito ser um
                                                                    vencedor</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q13"
                                                                    type="radio" value="C" required>
                                                                <span class="form-check-label">C - Para eu ganhar ninguém
                                                                    precisa perder</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q13"
                                                                    type="radio" value="O" required>
                                                                <span class="form-check-label">O - Para ganhar é preciso
                                                                    disciplina</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q13"
                                                                    type="radio" value="I" required>
                                                                <span class="form-check-label">I - Para ganhar é necessário
                                                                    inovar</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="card p-3 mb-5 shadow rounded">
                                                        <div class="form-label">Eu sempre gostei de...</div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q14"
                                                                    type="radio" value="I" required>
                                                                <span class="form-check-label">I - Explorar</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q14"
                                                                    type="radio" value="O" required>
                                                                <span class="form-check-label">O - Evitar surpresas</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q14"
                                                                    type="radio" value="A" required>
                                                                <span class="form-check-label">A - Focalizar a meta</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q14"
                                                                    type="radio" value="C" required>
                                                                <span class="form-check-label">C - Realizar uma abordagem
                                                                    natural</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="card p-3 mb-5 shadow rounded">
                                                        <div class="form-label">Eu gosto de mudanças se...</div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q15"
                                                                    type="radio" value="A" required>
                                                                <span class="form-check-label">A - Me der uma vantagem
                                                                    competitiva</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q15"
                                                                    type="radio" value="C" required>
                                                                <span class="form-check-label">C- For divertido e puder ser
                                                                    compartilhado</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q15"
                                                                    type="radio" value="I" required>
                                                                <span class="form-check-label">I - Me der mais liberdade e
                                                                    variedade</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q15"
                                                                    type="radio" value="O" required>
                                                                <span class="form-check-label">O - Melhorar ou me der mais
                                                                    controle</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="card p-3 mb-5 shadow rounded">
                                                        <div class="form-label">Não existe errado em...</div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q16"
                                                                    type="radio" value="A" required>
                                                                <span class="form-check-label">A - Se colocar na
                                                                    frente</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q16"
                                                                    type="radio" value="C" required>
                                                                <span class="form-check-label">C - Colocar os outros na
                                                                    frente</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q16"
                                                                    type="radio" value="I" required>
                                                                <span class="form-check-label">I - Mudar de ideia</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q16"
                                                                    type="radio" value="O" required>
                                                                <span class="form-check-label">O - Ser consistente</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="card p-3 mb-5 shadow rounded">
                                                        <div class="form-label">Eu gosto de buscar conselhos de...</div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q17"
                                                                    type="radio" value="A" required>
                                                                <span class="form-check-label">A - Pessoas bem
                                                                    sucedidas</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q17"
                                                                    type="radio" value="C" required>
                                                                <span class="form-check-label">C - Anciãos e
                                                                    conselheiros</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q17"
                                                                    type="radio" value="O" required>
                                                                <span class="form-check-label">O - Autoridades no
                                                                    assunto</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q17"
                                                                    type="radio" value="I" required>
                                                                <span class="form-check-label">I - Pessoas
                                                                    aleatórias</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="card p-3 mb-5 shadow rounded">
                                                        <div class="form-label">Meu lema é...</div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q18"
                                                                    type="radio" value="I" required>
                                                                <span class="form-check-label">I - Fazer o que precisa ser
                                                                    feito</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q18"
                                                                    type="radio" value="O" required>
                                                                <span class="form-check-label">O - Fazer bem feito</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q18"
                                                                    type="radio" value="C" required>
                                                                <span class="form-check-label">C - Fazer junto com o
                                                                    grupo</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q18"
                                                                    type="radio" value="A" required>
                                                                <span class="form-check-label">A - Simplesmente
                                                                    fazer</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="card p-3 mb-5 shadow rounded">
                                                        <div class="form-label">Eu gosto de...</div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q19"
                                                                    type="radio" value="I" required>
                                                                <span class="form-check-label">I - Complexidade, mesmo se
                                                                    confuso</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q19"
                                                                    type="radio" value="O" required>
                                                                <span class="form-check-label">O - Ordem e
                                                                    sistematização</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q19"
                                                                    type="radio" value="C" required>
                                                                <span class="form-check-label">C - Calor humano e
                                                                    animação</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q19"
                                                                    type="radio" value="A" required>
                                                                <span class="form-check-label">A - Coisas claras e
                                                                    simples</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="card p-3 mb-5 shadow rounded">
                                                        <div class="form-label">Tempo pra mim é...</div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q20"
                                                                    type="radio" value="A" required>
                                                                <span class="form-check-label">A - Algo que detesto
                                                                    desperdiçar</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q20"
                                                                    type="radio" value="C" required>
                                                                <span class="form-check-label">C - Um grande ciclo</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q20"
                                                                    type="radio" value="O" required>
                                                                <span class="form-check-label">O - Uma flecha que leva ao
                                                                    inevitável</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q20"
                                                                    type="radio" value="I" required>
                                                                <span class="form-check-label">I - Irrelevante</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="card p-3 mb-5 shadow rounded">
                                                        <div class="form-label">Se eu fosse bilionário...</div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q21"
                                                                    type="radio" value="C" required>
                                                                <span class="form-check-label">C - Faria doações para
                                                                    muitas entidades</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q21"
                                                                    type="radio" value="O" required>
                                                                <span class="form-check-label">O - Criaria uma poupança
                                                                    avantajada</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q21"
                                                                    type="radio" value="I" required>
                                                                <span class="form-check-label">I - Faria o que desse na
                                                                    cabeça</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q21"
                                                                    type="radio" value="A" required>
                                                                <span class="form-check-label">A - Exibiria bastante com
                                                                    algumas pessoas</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="card p-3 mb-5 shadow rounded">
                                                        <div class="form-label">Eu acredito que...</div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q22"
                                                                    type="radio" value="A" required>
                                                                <span class="form-check-label">A - O destino é mais
                                                                    importante que a jornada</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q22"
                                                                    type="radio" value="C" required>
                                                                <span class="form-check-label">C - A jornada é mais
                                                                    importante que o destino</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q22"
                                                                    type="radio" value="O" required>
                                                                <span class="form-check-label">O - Um centavo economizado é
                                                                    dinheiro ganho</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q22"
                                                                    type="radio" value="I" required>
                                                                <span class="form-check-label">I - Basta um navio e uma
                                                                    estrela para navegar</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="card p-3 mb-5 shadow rounded">
                                                        <div class="form-label">Eu acredito também que...</div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q23"
                                                                    type="radio" value="A" required>
                                                                <span class="form-check-label">A - Aquele que hesita está
                                                                    perdido</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q23"
                                                                    type="radio" value="O" required>
                                                                <span class="form-check-label">O - De grão em grão a
                                                                    galinha enche o papo</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q23"
                                                                    type="radio" value="C" required>
                                                                <span class="form-check-label">C - O que vai, volta</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q23"
                                                                    type="radio" value="I" required>
                                                                <span class="form-check-label">I - Um sorriso ou careta é o
                                                                    mesmo para cego</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="card p-3 mb-5 shadow rounded">
                                                        <div class="form-label">Eu acredito ainda que...</div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q24"
                                                                    type="radio" value="O" required>
                                                                <span class="form-check-label">O - É melhor prudência do
                                                                    que se arrepender</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q24"
                                                                    type="radio" value="I" required>
                                                                <span class="form-check-label">I - Autoridade deve ser
                                                                    desafiada</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q24"
                                                                    type="radio" value="A" required>
                                                                <span class="form-check-label">A - Ganhar é
                                                                    fundamental</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q24"
                                                                    type="radio" value="C" required>
                                                                <span class="form-check-label">C - O coletivo é mais
                                                                    importante</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="card p-3 mb-5 shadow rounded">
                                                        <div class="form-label">Eu penso que...</div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q25"
                                                                    type="radio" value="I" required>
                                                                <span class="form-check-label">I - Não é fácil ficar
                                                                    encurralado</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q25"
                                                                    type="radio" value="O" required>
                                                                <span class="form-check-label">O - É preferível olhar antes
                                                                    de pular</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q25"
                                                                    type="radio" value="C" required>
                                                                <span class="form-check-label">C - Duas cabeças pensar
                                                                    melhor que uma</span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-check">
                                                                <input class="form-check-input" name="q25"
                                                                    type="radio" value="A" required>
                                                                <span class="form-check-label">A - Se você não tem
                                                                    condições, não compita</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn me-auto"
                                                    data-bs-dismiss="modal">Fechar</button>
                                                <button type="submit" class="btn btn-primary">Enviar Candidatura</button>
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
