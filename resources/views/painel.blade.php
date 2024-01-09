<!DOCTYPE html>
<html lang="pt-br" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>

    <link rel="icon" type="image/x-icon" href="/img_admin/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="/css/style.css" rel="stylesheet">
</head>
<body class="bg-dark h-100">
    <header class="bg-light py-2 shadow">
        <div class="container-fluid">
            <div class="row">

                <div class="col dropdown d-flex align-items-center justify-content-end">
                    <div class="d-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Bem vindo {{auth()->user()->name}}!
    
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear-fill ms-2" viewBox="0 0 16 16">
                            <path fill="#6c757D"  d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                        </svg>
                    </div>

                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item text-end" href="#">
                                <small>Alterar Senha</small>
                            </a>
                            <a class="dropdown-item text-end" href="{{route('login.logout')}}">
                                <small>Sair</small>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <div class="d-flex" style="min-height: calc(100vh - 76px - 72px);">
        <aside class="bg-custom text-light py-4" style="width: 250px;">
            <div class="menu">
                <div class="item">
                    <div class="w-100 d-flex align-items-center gap-2 link-light text-decoration-none mt-2 py-3 px-3 border-start border-light border-4" type="button" data-bs-toggle="collapse" data-bs-target="#menu-usuario" aria-expanded="true" aria-controls="menu-usuario">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
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
                            <a href="{{route('painel')}}" class="submenu-link link-light text-decoration-none rounded p-2 active">
                                <small class="d-flex justify-content-between align-items-center">
                                    Listagem Pets
    
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                    </svg>
                                </small>
                            </a>
                            <a href="{{route('painel-solicitacoes')}}" class="submenu-link link-light text-decoration-none rounded p-2 ">
                                <small class="d-flex justify-content-between align-items-center">
                                    Listagem Solicitações
                                </small>
                            </a>
                        </div>
                    </div>
                </div>

                <a href="{{route('login.logout')}}"
                class="w-100 d-flex align-items-center gap-2 link-light text-decoration-none mt-2 py-3 px-3 ms-1 icon-link icon-link-hover"
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
                <h1 class="h3">Pets</h1>

                <div class="d-flex gap-2">

                    <a href="#" class="btn btn-light" title="Excel">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-file-earmark-excel" viewBox="0 0 16 16">
                            <path d="M5.884 6.68a.5.5 0 1 0-.768.64L7.349 10l-2.233 2.68a.5.5 0 0 0 .768.64L8 10.781l2.116 2.54a.5.5 0 0 0 .768-.641L8.651 10l2.233-2.68a.5.5 0 0 0-.768-.64L8 9.219l-2.116-2.54z"/>
                            <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                        </svg>
                    </a>

                    <a href="{{route('cadastrar')}}" class="btn btn-light">+ Cadastrar Pet</a>
                </div>
            </div>

            <div class="d-flex justify-content-between align-items-end mb-3">
                <form method="GET" action="{{route('painel-filtrar')}}" class="bg-custom rounded col-12 py-3 px-4">
                    
                    <div class="row align-items-end row-gap-4">
                        <div class="col-2 d-flex flex-wrap">
                            <label for="nome" class="col-form-label">Nome:</label>
                            <div class="col-12">
                                <input type="text" class="form-control bg-dark text-light border-dark" name="nome" id="nome">
                            </div>
                        </div>
                        <div class="col-2 d-flex flex-wrap">
                            <label for="especie" class="col-form-label">Espécie:</label>
                            <div class="col-12">
                                <input type="text" class="form-control bg-dark text-light border-dark" name="especie" id="especie" >
                            </div>
                        </div>
                        <div class="col-2 d-flex flex-wrap">
                            <label for="raca" class="col-form-label">Raça:</label>
                            <div class="col-12">
                                <input type="text" class="form-control bg-dark text-light border-dark" name="raca" id="raca">
                            </div>
                        </div>
                        <div class="col-1 d-flex flex-wrap">
                            <label for="idade" class="col-form-label">Idade:</label>
                            <div class="col-12">
                                <input type="text" class="form-control bg-dark text-light border-dark" name="idade" id="idade">
                            </div>
                        </div>
                        <div class="col-1 d-flex flex-wrap">
                            <label for="peso" class="col-form-label">Peso:</label>
                            <div class="col-12">
                                <input type="text" class="form-control bg-dark text-light border-dark" name="peso" id="peso" >
                            </div>
                        </div>
                        <div class="col-2 d-flex flex-wrap">
                            <label for="porte" class="col-form-label">Porte:</label>
                            <div class="col-12">
                                <input type="text" class="form-control bg-dark text-light border-dark" name="porte" id="porte" >
                            </div>
                        </div>
                        <div class="col-2 d-flex flex-wrap">
                            <label for="local" class="col-form-label">Local:</label>
                            <div class="col-12">
                                <input type="text" class="form-control bg-dark text-light border-dark" name="local" id="local" >
                            </div>
                        </div>
                        <div class="col-3 d-flex flex-wrap">
                            <label for="sobre" class="col-form-label">Sobre:</label>
                            <div class="col-12">
                                <input type="text" class="form-control bg-dark text-light border-dark" name="sobre" id="sobre" >
                            </div>
                        </div>
                        <div class="col-3 d-flex flex-wrap">
                            <label for="sexo" class="col-form-label">Sexo:</label>
                            <div class="col-12">
                                <select name="sexo" class="form-control bg-dark text-light border-dark form-select" id="sexo">
                                    <option value="" disabled selected>Selecione</option>
                                    <option value="Feminino">Feminino</option>
                                    <option value="Masculino">Masculino</option>
                                </select>
                            </div>
                        </div>

    
                        <div class="col-3 d-flex flex-wrap">
                            <label for="status" class="col-form-label">Status:</label>
                            <div class="col-12">
                                <select name="status" class="form-control bg-dark text-light border-dark form-select" id="status">
                                    <option value="" disabled selected>Selecione</option>
                                    <option value="1">Ativado</option>
                                    <option value="0">Desativado</option>
                                </select>
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
                            <th scope="col" class="text-uppercase">Animal</th>
                            <th scope="col" class="text-uppercase">Código</th>
                            <th scope="col" class="text-uppercase">Espécie</th>
                            <th scope="col" class="text-uppercase">Raça</th>
                            <th scope="col" class="text-uppercase">Idade</th>
                            <th scope="col" class="text-uppercase">Peso</th>
                            <th scope="col" class="text-uppercase">Porte</th>
                            <th scope="col" class="text-uppercase">Local</th>
                            <th scope="col" class="text-uppercase">Sobre</th>
                            <th scope="col" class="text-uppercase">Sexo</th>
                            <th scope="col" class="text-uppercase">Status</th>
                            <th scope="col" class="text-uppercase text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pets as $pet)
                        <tr>
                            <td>{{$pet->nome}}</td>
                            <td>{{$pet->id}}</td>
                            <td>{{$pet->especie}}</td>
                            <td>{{$pet->raca}}</td>
                            <td>{{$pet->idade}}</td>
                            <td>{{$pet->peso}}</td>
                            <td>{{$pet->porte}}</td>
                            <td>{{$pet->local}}</td>
                            <td>{{$pet->sobre}}</td>
                            <td>{{$pet->sexo}}</td>
                            <td>{{$pet->status}}</td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    
                                    <a href="{{route('painel-editar', ['id'=>$pet->id])}}" class="btn btn-light d-flex justify-content-center align-items-center rounded-circle p-2 mx-2" title="Editar">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                            <path fill="#141618" d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                        </svg>
                                    </a>
                                <form action="{{ route('painel-destroy', ['id'=>$pet->id]) }}" method="POST">   
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger d-flex justify-content-center align-items-center rounded-circle p-2 mx-2" title="Deletar">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path fill="#FFF" d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                            <path fill="#FFF" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                        </svg>
                                    </button>
                                </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <nav aria-label="navigation">
                        <ul class="pagination justify-content-end pt-4 pb-2">
                            @if ($pets->lastPage() > 1)
                            @if ($pets->currentPage() > 1)
                            <li class="page-item"><a class="page-link bg-custom border-dark link-light"
                                    href="{{ $pets->previousPageUrl() }}">Anterior</a></li>
                            @endif

                            @foreach ($pets->getUrlRange(max($pets->currentPage() - 2, 1), min($pets->lastPage(),
                            $pets->currentPage() + 2)) as $page => $url)
                            <li class="page-item{{ $page == $pets->currentPage() ? ' active' : '' }}"><a
                                    class="page-link bg-custom border-dark link-light" href="{{ $url }}">{{ $page }}</a>
                            </li>
                            @endforeach

                            @if ($pets->currentPage() < $pets->lastPage())
                                <li class="page-item"><a class="page-link bg-custom border-dark link-light"
                                        href="{{ $pets->nextPageUrl() }}">Próximo</a></li>
                                @endif
                                @endif
                        </ul>
                    </nav>
        </main>
    </div>

    <footer class="bg-custom text-light text-center py-4">
        <small>© Copyright 2023 - PETS - Todos os Direitos Reservados</small>
    </footer>

   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>