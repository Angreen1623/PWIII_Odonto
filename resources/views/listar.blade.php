<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>

    <?php view('navbar');?>
    
    <div class="container">
        <div class="col">
            <div class="row">

                <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
                    <div class="container-fluid bg-primary">
                        <a class="navbar-brand" href="#">SISTEMA WEB</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-link" href="/form">Cadastrar</a>
                                <a class="nav-link" href="/list">Consultar</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="row">
                <p>
                <h4 class="fw-normal">Cadastrar: Agendamento de potenciais clientes</h4>
                </p>
                <p>
                <h5 class="fw-normal">Sistema utilizado para agendamento de serviços</h5>
                </p>
            </div>


            <div class="row">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr class="table-primary">
                            <th scope="col">Id</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Telefone</th>
                                <th scope="col">Origem</th>
                                <th scope="col">Data Contato</th>
                                <th scope="col">Observação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($contato) > 0)
                            @foreach ($contato as $cont)
                            <tr>
                                <th>{{ $cont->id }}</th>
                                <th>{{ $cont->nome }}</th>
                                <th>{{ $cont->telefone}}</th>
                                <th>{{ $cont->origem }}</th>
                                <th>{{ $cont->data_contato }}</th>
                                <th>{{ $cont->observacao}}</th>
                                <th><a href="/editar/{{ $cont->id }}" class="btn btn-primary">Editar</a>
                                    <a href="/excluir/{{ $cont->id }}" class="btn btn-danger">Excluir</a>
                                </th>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <th>Sem registros!</th>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>