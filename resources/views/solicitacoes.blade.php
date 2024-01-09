<!DOCTYPE html> <html lang="pt-br" class="h-100"> <head> <meta charset="UTF-8"> <meta name="viewport"
    content="width=device-width, initial-scale=1.0"> <title>ADMIN </title> <link rel="icon" type="image/x-icon"
    href="/img_admin/favicon.ico"> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet" crossorigin="anonymous">
<link href="/css/style.css" rel="stylesheet">
</head>

<body class="bg-dark h-100">
    <header class="bg-light py-2 shadow"> <div class="container-fluid"> <div class="row">
        <div style="width: 250px;">  </div>

        <div class="col dropdown d-flex align-items-center justify-content-end">
        <div class="d-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        Bem vindo Admin!

        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
        class="bi bi-gear-fill ms-2" viewBox="0 0 16 16"> <path fill="#6c757D" d="M9.405
                    1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0
                    1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872
                    2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705
                    2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464
                    1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1
                    .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0
                    1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0
                    1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                </svg>
                </div>

                <ul class=" dropdown-menu">
            <li> <a class="dropdown-item text-end" href="#">
                    <small>Alterar Senha</small>
                    </a>
                    <a class="dropdown-item text-end" href="{{route('login.form')}}">
                        <small>Sair</small>
                        </a>
            </li>
            </ul>
            </div>
            </div>
            </div>
            </header>

            <div class="d-flex" style="min-height: calc(100vh - 76px - 72px);"> <aside class="bg-custom text-light py-4"
            style="width: 250px;"> <div class="menu">
            <div class="item">
                <div class="w-100 d-flex align-items-center gap-2 link-light text-decoration-none mt-2 py-3 px-3
                border-start border-light border-4"
                type="button" data-bs-toggle="collapse" data-bs-target="#menu-usuario" aria-expanded="true"
                aria-controls="menu-usuario">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                class="bi bi-person-fill" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                </svg>

                Usuários
                </div>

                <div class="collapse show" id="menu-usuario">
                <div class="bg-dark d-flex flex-column rounded mx-4 p-2 row-gap-1">
                <a href="{{route('cadastrar')}}" class="submenu-link link-light text-decoration-none rounded p-2">
                    <small class="d-flex justify-content-between align-items-center">
                    Cadastrar
                    </small>
                    </a>
                    <a href="{{route('painel')}}" class="submenu-link link-light text-decoration-none rounded p-2">
                    <small class="d-flex justify-content-between align-items-center">
                        Listagem Pets

                    </small>
                    </a>
                    <a href="{{route('painel')}}"
                    class="submenu-link link-light text-decoration-none rounded p-2 active">
                    <small class="d-flex justify-content-between align-items-center">
                    Listagem Solicitações
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class=?bi
                        bi-chevron-right" viewBox="0 0 16 16"> <path fill-rule="evenodd"
                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                    </small>
                </a>
                </div>
                </div>
            </div>

            <a href="{{route('login.form')}}"
            class="w-100 d-flex align-items-center gap-2 link-light text-decoration-none mt-2 py-3 px-3 ms-1 icon-link
            icon-link-hover"
            style="--bs-icon-link-transform: translate3d(-.125rem, 0, 0);">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                <path fill-rule="evenodd"
                    d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
            </svg>

            Sair
            </a>
            </div>
            </aside>

            <main class="col h-100 text-light p-4">
                <div class="d-flex justify-content-between mb-4">
                    <h1 class="h3">Usuários</h1>

                    <div class="d-flex gap-2">

                        <a href="{{ route('export-solicitacoes') }}" class="btn btn-light" title="Excel">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-file-earmark-excel" viewBox="0 0 16 16">
                                <path
                                    d="M5.884 6.68a.5.5 0 1 0-.768.64L7.349 10l-2.233 2.68a.5.5 0 0 0 .768.64L8 10.781l2.116 2.54a.5.5 0 0 0 .768-.641L8.651 10l2.233-2.68a.5.5 0 0 0-.768-.64L8 9.219l-2.116-2.54z" />
                                <path
                                    d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
                            </svg>
                        </a>

                        <a href="{{route('cadastrar')}}" class="btn btn-light">+ Cadastrar Pet</a>
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-end mb-3">
                    <form method="GET" action="{{route('solicitantes-filtrar')}}"
                        class="bg-custom rounded col-12 py-3 px-4">

                        <div class="row align-items-end row-gap-4">
                            <div class="col-2 d-flex flex-wrap">
                                <label for="nome" class="col-form-label">Solicitante:</label>
                                <div class="col-12">
                                    <input type="text" class="form-control bg-dark text-light border-dark"
                                        name="solicitante" id="nome">
                                </div>
                            </div>
                            <div class="col-2 d-flex flex-wrap">
                                <label for="idPet" class="col-form-label">Nome do animal:</label>
                                <div class="col-12">
                                    <input type="text" class="form-control bg-dark text-light border-dark" name="idPet"
                                        id="idPet">
                                </div>
                            </div>
                            <div class="col-2 d-flex flex-wrap">
                                <label for="raca" class="col-form-label">Data de envio:</label>
                                <div class="col-12">
                                    <input type="datetime-local" class="form-control bg-dark text-light border-dark"
                                        name="created_at" id="raca">
                                </div>
                            </div>

                            <div class="col-1 d-flex justify-content-end">
                                <button type="submit" class="btn btn-light w-100">Filtrar</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="bg-custom rounded overflow-hidden">

                    <table class="table mb-0 table-custom table-dark align-middle">
                        <thead>
                            <tr>
                                <th scope="col" class="text-uppercase">Data de envio:</th>
                                <th scope="col" class="text-uppercase">Solicitante:</th>
                                <th scope="col" class="text-uppercase">Nome do Animal:</th>
                                <th scope="col" class="text-uppercase text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($solicitantes as $solicitante)
                            <tr>
                                <td>{{$solicitante->created_at}}</td>
                                <td>{{$solicitante->solicitante}}</td>
                                <td>
                                    @if ($pet = $pets->where('id', $solicitante->idPet)->first())
                                    {{ $pet->nome }}
                                    @else
                                    Nenhum pet encontrado
                                    @endif
                                </td>

                                <td>
                                    <div class="d-flex justify-content-center">
                                        <button data-id="{{ $solicitante->id }}" type="button"
                                            class="btn btn-light d-flex justify-content-center align-items-center rounded-circle p-2 mx-2 detalhes-solicitacoes"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                <path
                                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                            </svg>
                                        </button>
                                        
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <nav aria-label="navigation">
                        <ul class="pagination justify-content-end pt-4 pb-2">
                            @if ($solicitantes->lastPage() > 1)
                            @if ($solicitantes->currentPage() > 1)
                            <li class="page-item"><a class="page-link bg-custom border-dark link-light"
                                    href="{{ $solicitantes->previousPageUrl() }}">Anterior</a></li>
                            @endif

                            @foreach ($solicitantes->getUrlRange(max($solicitantes->currentPage() - 2, 1), min($solicitantes->lastPage(),
                            $solicitantes->currentPage() + 2)) as $page => $url)
                            <li class="page-item{{ $page == $solicitantes->currentPage() ? ' active' : '' }}"><a
                                    class="page-link bg-custom border-dark link-light" href="{{ $url }}">{{ $page }}</a>
                            </li>
                            @endforeach

                            @if ($solicitantes->currentPage() < $solicitantes->lastPage())
                                <li class="page-item"><a class="page-link bg-custom border-dark link-light"
                                        href="{{ $solicitantes->nextPageUrl() }}">Próximo</a></li>
                                @endif
                                @endif
                        </ul>
                    </nav>
            </main>
            </div>

            <footer class="bg-custom text-light text-center py-4">
                <small>© Copyright 2023 - PETS - Todos os Direitos Reservados</small>
            </footer>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered text-light">
                    <div class="modal-content bg-custom">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Usuário</h1>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body d-flex flex-wrap row-gap-4">
                            
                            <div class="col-6">
                                <div><small>Solicitante:</small></div>
                                <div id="solicitanteModal">{{$solicitante->solicitante}}</div>
                            </div>

                            <div class="col-12">
                                <div><small>E-mail:</small></div>
                                <div id="emailModal">{{$solicitante->email}}</div>
                            </div>
                            <div class="col-12">
                                <div><small>CPF:</small></div>
                                <div id="cpfModal">{{$solicitante->cpf}}</div>
                            </div>
                            <div class="col-12">
                                <div><small>Celular:</small></div>
                                <div id="celularModal">{{$solicitante->celular}}</div>
                            </div>
                            <div class="col-12">
                                <div><small>Data de nascimento:</small></div>
                                <div id="dataModal">{{$solicitante->data_nas}}</div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
                crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.7.1.min.js"
                integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</body>

<script>

    var buttonsDetails = document.getElementsByClassName('detalhes-solicitacoes')

    Array.from(buttonsDetails).forEach(function(button){
        button.addEventListener('click', function(){
            var solicitacao_id = button.dataset.id;


            $.ajax({
                url: `/painel/solicitantes/${solicitacao_id}`,
                method: 'GET',
                success: function(response)
                {
                    var solicitante = document.getElementById("solicitanteModal");
                    solicitante.innerHTML = response.solicitante;
                    var solicitante = document.getElementById("emailModal");
                    solicitante.innerHTML = response.email;
                    var solicitante = document.getElementById("cpfModal");
                    solicitante.innerHTML = response.cpf;
                    var solicitante = document.getElementById("celularModal");
                    solicitante.innerHTML = response.celular;
                    var solicitante = document.getElementById("dataModal");
                    solicitante.innerHTML = response.data_nas;
                    
                },
                fail: function()
                {
                    alert("Erro ao consultar solicitação");
                }
            })
        });
    });


</script>

</html>