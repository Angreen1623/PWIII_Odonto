<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Listar</title>
</head>

<body>
    @include('navbar')

    <section class="antialiased bg-gray-50 text-gray-600 min-h-screen p-4">

    <h3 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl text-center my-10">Consultas Agendadas</h3>


        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach($paciente as $pac)
            <!-- Card -->
            <div class="h-200 w-200">
                <div class="relative bg-blue-300 shadow-lg rounded-lg shadow-lg p-5 overflow-hidden">

                    <!-- Card content -->
                    <div class="relative pt-[1.5rem] pb-14">
                        <h3 class="text-2xl font-extrabold text-indigo-50 leading-snug mb-2">Paciente: {{ $pac->nome_pac }}</h3>
                        <div class="text-xs font-bold uppercase text-blue-900 tracking-widest mb-2">Consulta: {{ $pac->tipo_consulta }}</div>
                        <div class="text-xs font-bold uppercase text-blue-900 tracking-widest mb-2">Nascimento: {{ $pac->dt_nasc }}</div>
                        <div class="text-xs font-bold uppercase text-blue-900 tracking-widest mb-2">Médico: {{ $pac->nome_med }}</div>
                        <div class="text-xs font-bold uppercase text-blue-900 tracking-widest mb-2">Data da Consulta: {{ $pac->data }}</div>
                        <div class="text-xs font-bold uppercase text-blue-900 tracking-widest mb-2">Hora da Consulta: {{ $pac->hora }}</div>
                        <div class="text-xs font-bold uppercase text-blue-900 tracking-widest mb-2">Observação: {{ $pac->observacao }}</div>
                    </div>
                    <!-- Card footer -->
                    <div class="relative text-right">
                        <button class="inline-flex items-center px-4 py-2 bg-red-600 hover:bg-red-700 text-white text-sm font-medium rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                            <a href="/excluir/{{ $pac->id }}">Excluir</a>
                        </button>

                            <button class="inline-flex items-center px-4 py-2 bg-gray-200 hover:bg-gray-300 text-gray-800 text-sm font-medium rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                                </svg>

                                <a href="/excluir/{{ $pac->id }}">Excluir</a>
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
    </section>
</body>

</html>