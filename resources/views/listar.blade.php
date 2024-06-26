<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Listar</title>

    <!-- Fonts -->
    <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
</head>

<body>
    @include('navbar')

    <section class="antialiased text-gray-600 px-4">

    <div class="mx-auto max-w-2xl text-center">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl mt-10">Consultas Agendadas</h2>
        <p class="mt-2 text-lg leading-8 text-gray-600">Sistema de um Consultório Odontológico</p>
    </div>

    @if(count($paciente) > 0)
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-16 sm:mt-10">
            
            @foreach($paciente as $pac)
            <!-- Card -->
            <div class="h-200 w-200">
                <div class="relative bg-blue-300 shadow-lg rounded-lg shadow-lg p-5 overflow-hidden">

                    <!-- Card content -->
                    <div class="relative pt-[1.5rem] pb-14">
                        <h3 class="text-2xl font-extrabold text-indigo-50 leading-snug mb-2 truncate">Paciente: {{ $pac->nome_pac }}</h3>
                        <div class="text-xs font-bold uppercase text-blue-900 tracking-widest mb-2">Consulta: {{ $pac->tipo_consulta }}</div>
                        <div class="text-xs font-bold uppercase text-blue-900 tracking-widest mb-2">Nascimento: {{ $pac->dt_nasc }}</div>
                        <div class="text-xs font-bold uppercase text-blue-900 tracking-widest mb-2">Médico: {{ $pac->nome_med }}</div>
                        <div class="text-xs font-bold uppercase text-blue-900 tracking-widest mb-2">Data da Consulta: {{ $pac->data }}</div>
                        <div class="text-xs font-bold uppercase text-blue-900 tracking-widest mb-2">Hora da Consulta: {{ $pac->hora }}</div>
                        <div class="text-xs font-bold uppercase text-blue-900 tracking-widest mb-2 truncate">Observação: {{ $pac->observacao }}</div>
                    </div>
                    <!-- Card footer -->
                    <div class="relative text-right">
                        <a href="/excluir/{{ $pac->id }}">
                            <button class="inline-flex items-center px-4 py-2 bg-red-600 hover:bg-red-700 text-white text-sm font-medium rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                                Excluir
                            </button>
                        </a>

                        <a href="/editar/{{ $pac->id }}">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-200 hover:bg-gray-300 text-gray-800 text-sm font-medium rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                                </svg>
                                editar
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
        @else     
            <h3 class="text-2xl font-extrabold text-stone-400 leading-snug mb-2 truncate text-center mt-20">Ainda não há pacientes cadastrados</h3>
        @endif
            
    </section>
</body>

</html>