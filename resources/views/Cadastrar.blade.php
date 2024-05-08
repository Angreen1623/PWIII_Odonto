<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->

       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <?php view('navbar');?>

    <div class="container">
        <div class="col">
            <div class="row">
                <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body mb-3" data-bs-theme="dark">">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Sistema de Agendamento de consultas</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-link active" aria-current="page" href="/">Cadastrar</a>
                                <a class="nav-link" href="/listar">Consultar</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="row">
                <p>
                <h3>Sistema de um Consultório Odontológico</h3>  
                </p>
                <p>
                <h4>Agendamento de Consultas </h4>
                </p>
            </div>
    <form method="POST" action="/adicionarCliente">
     @csrf    
            <div class="row">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nome do Paciente:</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="nome_pac">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Data de Nascimento:</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="" name="dt_nasc">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nome do Médico:</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="nome_med">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tipo de Consulta:</label>
                    <select class="form-select" aria-label="Default select example" name="tipo_consulta">
                        <option value="nenhum foi selecionado">Selecionar</option>
                        <option value="Cirurgia">Cirurgia</option>
                        <option value="Checkup">Checkup</option>
                        <option value="Estética">Estética</option>
                        <option value="Limpeza">Limpeza</option>
                        <option value="Retorno">Retorno</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Data da Consulta:</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="" name="data">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Hora da Consulta:</label>
                    <input type="time" class="form-control" id="exampleFormControlInput1" placeholder="" name="hora">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Observação: </label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="observacao"></textarea>
                </div>
            </div>
            <div class="col">
            <button type="submit" class="btn btn-dark">Cadastrar</button>
            </div>
    </form>    
        </div>
    </div>
</body>
</html>