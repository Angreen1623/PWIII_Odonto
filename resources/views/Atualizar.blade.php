<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Editar</title>

        <!-- Fonts -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
       
    <div>
       @include('navbar')
        
  <div class="mx-auto max-w-2xl text-center">
    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl mt-10">Edição de Consultas Existentes</h2>
    <p class="mt-2 text-lg leading-8 text-gray-600">Sistema de um Consultório Odontológico</p>
  </div>

  <!--formulário-->
  <form action="/atualizar/{{$paciente->id}}" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
  @csrf
    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">

    <!--nome do paciente-->
      <div>
        <label for="nome_pac" class="block text-sm font-semibold leading-6 text-gray-900">Nome do paciente</label>
        <div class="mt-2.5">
          <input type="text" name="nome_pac" id="nome_pac" required value="{{$paciente->nome_pac}}" autocomplete="given-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

      <!--Data de Nascimento-->
      <div>
        <label for="dt_nasc" class="block text-sm font-semibold leading-6 text-gray-900">Data de Nascimento</label>
        <div class="mt-2.5">
          <input type="date" name="dt_nasc" id="dt_nasc" required value="{{$paciente->dt_nasc}}" autocomplete="family-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

      <!--Nome do médico-->
      <div class="sm:col-span-2">
        <label for="nome_med" class="block text-sm font-semibold leading-6 text-gray-900">Nome do Médico</label>
        <div class="mt-2.5">
          <input type="text" name="nome_med" id="nome_med" required value="{{$paciente->nome_med}}" autocomplete="organization" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

      <!--tipo de consulta-->
      <div class="sm:col-span-2">
        <label for="tipo_consulta" class="block text-sm font-semibold leading-6 text-gray-900">Tipo de Consulta</label>
        <div class="relative mt-2.5">
          <div class="inset-y-0 left-0 flex items-center">
          <select id="tipo_consulta" name="tipo_consulta" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        
                      @if($paciente->tipo_consulta == "Cirurgia")
                        <option value="Cirurgia" selected>Cirurgia</option>
                      @else
                        <option value="Cirurgia">Cirurgia</option>
                      @endif

                      @if($paciente->tipo_consulta == 'Checkup')
                      <option value="Checkup" selected>Checkup</option>
                      @else
                      <option value="Checkup">Checkup</option>
                      @endif

                      @if($paciente->tipo_consulta == 'Estética')
                      <option value="Estética" selected>Estética</option>
                      @else
                      <option value="Estética">Estética</option>
                      @endif

                      @if($paciente->tipo_consulta == 'Limpeza')
                      <option value="Limpeza" selected>Limpeza</option>
                      @else
                      <option value="Limpeza">Limpeza</option>
                      @endif

                      @if($paciente->tipo_consulta == 'Retorno')
                      <option value="Retorno" selected>Retorno</option>
                      @else
                      <option value="Retorno">Retorno</option>
                      @endif

            </select>
          </div>
        </div>
      </div>

      <!--data da consulta-->
      <div>
        <label for="data" class="block text-sm font-semibold leading-6 text-gray-900">Data da Consulta</label>
        <div class="mt-2.5">
          <input type="date" name="data" id="data" required value="{{$paciente->data}}" autocomplete="given-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>
      <!--hora da consluta-->
      <div>
        <label for="hora" class="block text-sm font-semibold leading-6 text-gray-900">Hora da Consulta</label>
        <div class="mt-2.5">
          <input type="time" name="hora" id="hora" required value="{{$paciente->hora}}" autocomplete="family-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>
       <!--observação-->
      <div class="sm:col-span-2">
        <label for="observacao" class="block text-sm font-semibold leading-6 text-gray-900">Observação</label>
        <div class="mt-2.5">
          <textarea name="observacao" id="observacao" required rows="4" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{$paciente->observacao}}</textarea>
        </div>
      </div>
    </div>

    <!--botão-->
    <div class="mt-10">
    <button type="submit" class="block w-full rounded-md bg-blue-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-blue-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">ALTERAR</button>
    </div>

  </form>
</div>
</body>
</html>