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

            @if (isset($error))
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            {{ $error }}
                        </div>
                    </div>
                </div>
            @endif

            <div class="container-fluid mb-5">
                <form action="{{ route('create') }}" method="POST" enctype="multipart/form-data">
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
                                        <input type="text" name="titulo" class="form-control" id="exampleFormControlInput1"
                                            placeholder="Ex.: Técnico de Segurança">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Atividades do Cargo
                                            <span style="color: red;">*</span></label>
                                        <textarea name="atividades" class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Requisitos
                                            Necessários <span style="color: red;">*</span></label>
                                        <textarea name="requisitos" class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 p-5">
                            <div class="upload-files-container">
                                <div class="drag-file-area">
                                    <span class="material-icons-outlined upload-icon"><i
                                            class="fa fa-upload"></i></span>
                                    <h3 class="dynamic-message"> Clique aqui para adicionar uma imagem a esta vaga </h3>
                                    <p>(Apenas arquivos .jpg e .jpeg) <span style="color: red;">*</span></p>
                                    <label class="label">
                                        <input name="img_capa" type="file" class="default-file-input" />
                                    </label>
                                </div>
                                <span class="cannot-upload-message"> <span class="material-icons-outlined">error</span>
                                    Please select a file first <span
                                        class="material-icons-outlined cancel-alert-button">cancel</span> </span>
                                <div class="file-block">
                                    <div class="file-info"> <span
                                            class="material-icons-outlined file-icon">description</span> <span
                                            class="file-name"> </span> | <span class="file-size"> </span> </div>
                                    <span class="material-icons remove-file-icon">delete</span>
                                    <div class="progress-bar"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 px-5">
                            <input name="status" type="hidden" value="Ativo">
                            <button class="btn btn-primary w-100 p-3" style="background-color: #ed8600;">Adicionar</button>
                        </div>
                    </div>
                </form>
            </div>



            @include('admin.includes.footer')

</body>

</html>
