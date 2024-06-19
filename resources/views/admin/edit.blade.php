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

            <div class="container-fluid mb-5">
                <form action="{{ route('update-vaga') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row row-add-vagas">
                        <div class="col-md-6 p-5">
                            <div class="card p-2" style="background-color: #191c24;">
                                <div class="card-header text-center">
                                    <h4>ADICIONE UMA NOVA VAGA</h4>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Título da Vaga <span
                                                style="color: red;">*</span></label>
                                        <input type="text" name="titulo" class="form-control"
                                            id="exampleFormControlInput1" placeholder="Ex.: Técnico de Segurança" value="{{ $vagas[0]->titulo }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Atividades do Cargo
                                            <span style="color: red;">*</span></label>
                                        <textarea name="atividades" class="form-control" id="exampleFormControlTextarea1" rows="6">{{ $vagas[0]->atividades }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Requisitos
                                            Necessários <span style="color: red;">*</span></label>
                                        <textarea name="requisitos" class="form-control" id="exampleFormControlTextarea1" rows="6">{{ $vagas[0]->requisitos }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 p-5">
                            <div class="upload-files-container">
                                <div class="drag-file-area">
                                    <span class="material-icons-outlined upload-icon"><i
                                            class="fa fa-upload"></i></span>
                                    <h3 class="dynamic-message"> Clique aqui para alterar a imagem desta vaga </h3>
                                    <p>(Apenas arquivos .jpg e .jpeg) <span style="color: red;">*</span></p>
                                    <label class="label">
                                        <input name="img_capa" type="file" class="default-file-input" />
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 px-5">
                            <input name="status" type="hidden" value="Ativo">
                            <input name="id" type="hidden" value="{{ $vagas[0]->id }}">
                            <button class="btn btn-primary w-100 p-3"
                                style="background-color: #ed8600;">Salvar Aterações</button>
                        </div>
                    </div>
                </form>
            </div>



            @include('admin.includes.footer')

</body>

</html>
