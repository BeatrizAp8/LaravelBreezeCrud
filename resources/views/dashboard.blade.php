<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gradient-to-r from-green-500 to-green-500 text-white rounded-lg p-8">
                <h1 class="text-4xl font-bold mb-4">Cadastro de Clientes</h1>
                <p class="text-lg">Seja muito bem-vindo cadastro de clientes.</p>
                <a href="listar" class="mt-4 inline-block bg-white text-blue-500 hover:bg-blue-200 rounded-lg px-6 py-3 font-semibold">Ver Clientes</a>
            </div>
        </div>
    </div>
</x-app-layout>

