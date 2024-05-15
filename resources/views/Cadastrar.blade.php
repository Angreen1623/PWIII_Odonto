<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
       
    <div class="container">

       <?php view('navbar');?>
        
    <form method="POST" action="/adicionar">
     @csrf    
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
      <h2 class="text-base font-semibold leading-7 text-gray-900">Sistema de um Consultório Odontológico</h2>
      <p class="mt-1 text-sm leading-6 text-gray-600">Agendamento de Consultas</p>

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-4">
             <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Nome do Paciente</label>
                <div class="mt-2">
                   <input type="text" name="nome_pac"  class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Nome do Paciente:">
                </div>
            </div>
         </div>

         <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-4">
             <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Data de Nascimento</label>
                <div class="mt-2">
                   <input type="date" name="dt_nasc" value="dt_nasc" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Data de Nascimento:">
                </div>
            </div>
         </div>

         <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-4">
             <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Nome do Médico</label>
                <div class="mt-2">
                   <input type="text" name="nome_med" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Nome do Médico:">
                </div>
            </div>
         </div>

        </div>
      </div>
     </div>

        <div class="sm:col-span-3">
          <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Tipo de Consulta</label>
          <div class="mt-2">
            <select id="tipo_consulta" name="tipo_consulta" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
            <option value="nenhum foi selecionado">Selecionar</option>
                        <option value="Cirurgia">Cirurgia</option>
                        <option value="Checkup">Checkup</option>
                        <option value="Estética">Estética</option>
                        <option value="Limpeza">Limpeza</option>
                        <option value="Retorno">Retorno</option>
            </select>
          </div>
        </div>

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-4">
             <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Data da Consulta</label>
                <div class="mt-2">
                   <input type="date" name="data" value="data" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Data da Consulta:">
                </div>
            </div>
         </div>

         <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-4">
             <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Hora da Consulta</label>
                <div class="mt-2">
                   <input type="time" name="hora" value="hora" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Hora da Consulta:">
                </div>
            </div>
         </div>

         <div class="col-span-full">
            <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Observação</label>
            <div class="mt-2">
                <textarea id="about" name="observacao" rows="3" value="observacao" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
            </div>
         </div> 
  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Agendar</button>
  </div>
</form>
        </div>
    </div>
</body>
</html>